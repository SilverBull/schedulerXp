import GSTC from "./assets/js/gantt-schedule/gstc.esm.min.js";
import { Plugin as TimelinePointer } from "./assets/js/gantt-schedule/plugins/timeline-pointer.esm.min.js";
import { Plugin as Selection } from "./assets/js/gantt-schedule/plugins/selection.esm.min.js";
import { Plugin as ItemMovement } from "./assets/js/gantt-schedule/plugins/item-movement.esm.min.js";
import { Plugin as ItemResizing } from "./assets/js/gantt-schedule/plugins/item-resizing.esm.min.js";
import { Plugin as DependencyLines } from "./assets/js/gantt-schedule/plugins/dependency-lines.esm.min.js";

let state;
let canChangeRow = false;
let canCollide = true;
let levelZoom = 14;

let lastItemId = 3;
let lastRowId = 2;

var vars = [];
$(document).ready(function () {
  var parts = window.location.href.replace(
    /[?&]+([^=&]+)=([^&]*)/gi,
    function (m, key, value) {
      // vars[key] = value;
      vars.push(value);
    }
  );
});

// document
//   .getElementById("can-change-row")
//   .addEventListener("change", function (el) {
//     canChangeRow = el.target.checked;
//   });
// document
//   .getElementById("can-collide")
//   .addEventListener("change", function (el) {
//     canCollide = el.target.checked;
//   });

function showAllItems() {
  const allItems = GSTC.api.getAllItems();
  for (const itemId in allItems) {
    console.log(itemId);
  }
}

function isCollision(item) {
  const allItems = gstc.api.getAllItems();
  for (const itemId in allItems) {
    if (itemId === item.id) continue;
    const currentItem = allItems[itemId];
    if (currentItem.rowId === item.rowId) {
      if (
        item.time.start >= currentItem.time.start &&
        item.time.start <= currentItem.time.end
      )
        return true;
      if (
        item.time.end >= currentItem.time.start &&
        item.time.end <= currentItem.time.end
      )
        return true;
      if (
        item.time.start <= currentItem.time.start &&
        item.time.end >= currentItem.time.end
      )
        return true;
      if (
        item.time.start >= currentItem.time.start &&
        item.time.end <= currentItem.time.end
      )
        return true;
    }
  }
  return false;
}

const movementPluginConfig = {
  events: {
    onStart({ items }) {
      console.log("Moving start", items.after);
      return items.after;
    },
    onMove({ items }) {
      // prevent items to change row
      return items.before.map((beforeMovementItem, index) => {
        const afterMovementItem = items.after[index];
        const myItem = GSTC.api.merge({}, afterMovementItem);
        if (!canChangeRow) {
          myItem.rowId = beforeMovementItem.rowId;
        }
        if (!canCollide && isCollision(myItem)) {
          myItem.time = { ...beforeMovementItem.time };
          myItem.rowId = beforeMovementItem.rowId;
        }
        return myItem;
      });
    },
    onEnd({ items }) {
      // console.log("Moving done", items.after);
      // return items.after;
      const test = items.after.map((item, index) => {
        if (
          confirm(`Stai modificando l'evento ${item.label}
          Data Iniziale: ${new Date(
            items.initial[index].time.start
          ).toLocaleString()} - ${new Date(
            items.initial[index].time.end
          ).toLocaleString()}
          Data Modificata: ${new Date(
            item.time.start
          ).toLocaleString()} - ${new Date(item.time.end).toLocaleString()}`)
        ) {
          return item;
        } else {
          return items.initial[index];
        }
      });
      return test;
    },
  },
  snapToTime: {
    start({ startTime, time }) {
      // return startTime.startOf("day").add(12, "hour");
      return startTime;
    },
  },
};

const resizingPluginConfig = {
  events: {
    onStart({ items }) {
      return items.after;
    },
    onResize({ items }) {
      const filtered = items.after
        .map((item, index) => {
          if (!isItemResizable(item)) {
            return items.before[index];
          }
          return item;
        })
        .map((item, index) => limitTime(item, items.before[index]))
        .map((item) => snapToTimeSeparately(item));

        // state.update("config.chart.items", (items) => {
        //   console.log(items);
        //   return items;
        // });

      return filtered;
    },
    onEnd({ items }) {
      console.log("Resizing start", items);
      const test = items.after.map((item, index) => {
        if (
          confirm(`Stai modificando l'evento ${item.label}
          Data Iniziale: ${new Date(
            items.initial[index].time.start
          ).toLocaleString()} - ${new Date(
            items.initial[index].time.end
          ).toLocaleString()}
          Data Modificata: ${new Date(
            item.time.start
          ).toLocaleString()} - ${new Date(item.time.end).toLocaleString()}`)
        ) {
          return item;
        } else {
          return items.initial[index];
        }
      });
      return test;
    },
  },
  snapToTime: {
    start({ startTime }) {
      // reset default period snapping behavior
      // if you want custom snapping for all items out of the box - you can do it here
      // like: return startTime.startOf('day').add(8,'hour');
      return startTime;
    },
    end({ endTime }) {
      // reset default period snapping behavior
      return endTime;
    },
  },
};

function isItemResizable(item) {
  if (typeof item.resizable === "boolean") return item.resizable;
  return true;
}

function limitTime(item, oldItem) {
  if (item.resizableFrom && item.time.start < item.resizableFrom) {
    item.time.start = item.resizableFrom;
  }
  if (item.resizableTo && item.time.end > item.resizableTo) {
    item.time.end = item.resizableTo;
  }
  if (item.resizableLength && item.resizablePeriod) {
    const actualDiff = GSTC.api
      .date(item.time.end)
      .diff(item.time.start, item.resizablePeriod, true);
    if (actualDiff > item.resizableLength) {
      const resizingFromStart = item.time.end === oldItem.time.end;
      if (resizingFromStart) {
        item.time.start = GSTC.api
          .date(item.time.end)
          .subtract(item.resizableLength, item.resizablePeriod) // -1 here because end of day - 3 days -> startOf day = almost 4 days
          .valueOf();
      } else {
        item.time.end = GSTC.api
          .date(item.time.start)
          .add(item.resizableLength, item.resizablePeriod)
          .valueOf();
      }
    }
  }
  return item;
}

function clickAction(element, data) {
  function onClick(event) {
    // data variable will be updated in update method below so it will be always actual
    let category;
    if (data.item.style.background === "blue") {
      category = "DIGITAL";
    }
    if (data.item.style.background === "green") {
      category = "PROGETTAZIONE";
    }
    if (data.item.style.background === "red") {
      category = "MEDICA";
    }
    if (data.item.style.background === "orange") {
      category = "INVIO AL CLIENTE";
    }
    // alert(`Evento: ${data.item.label}
    // Range Data: ${new Date(data.item.time.start).toLocaleString()} - ${new Date(
    //   data.item.time.end
    // ).toLocaleString()}
    // Durata (h): ${(data.item.time.end - data.item.time.start) / 60 / 60 / 1000}
    // Categoria: ${category}`);
    this.title = `Evento: ${data.item.label}
    Range Data: ${new Date(data.item.time.start).toLocaleString()} - ${new Date(
      data.item.time.end
    ).toLocaleString()}
    Durata (h): ${(data.item.time.end - data.item.time.start) / 60 / 60 / 1000}
    Categoria: ${category}`
  }

  element.addEventListener("mouseover", onClick);

  return {
    update(element, newData) {
      data = newData; // data from parent scope updated
    },

    destroy(element, data) {
      element.removeEventListener("mouseover", onClick);
    },
  };
}

function snapToTimeSeparately(item) {
  if (!item.snap) return item;
  const start = GSTC.api.date(item.time.start).startOf("day").add(10, "hour");
  const end = GSTC.api.date(item.time.end).startOf("day").add(18, "hour");
  item.time.start = start.valueOf();
  item.time.end = end.valueOf();
  // to change other properties than time we need to update item
  // because resizing-items plugin only works on time property
  state.update(
    `config.chart.items.${item.id}.label`,
    `From ${start.format("YYYY-MM-DD HH:mm")} to ${end.format(
      "YYYY-MM-DD HH:mm"
    )}`
  );
  return item;
}

const hours = [
  {
    zoomTo: 100, // we want to display this format for all zoom levels until 100
    period: "hour",
    periodIncrement: 1,
    format({ timeStart }) {
      return timeStart.format("DD MMMM YYYY"); // full list of formats: https://day.js.org/docs/en/display/format
    },
  },
];

const minutes = [
  {
    zoomTo: 100, // we want to display this format for all zoom levels until 100
    period: "minute",
    periodIncrement: 15,
    main: true,
    format({ timeStart, vido }) {
      return vido.html`<div style="text-align:center;">${timeStart.format(
        "HH:mm"
      )}</div>`; // full list of formats: https://day.js.org/docs/en/display/format
    },
  },
];

const rowsFromDB = [
  {
    id: "1",
    label: "Row 1",
  },
  {
    id: "2",
    label: "Row 2",
  },
];

let newItems = [];
let allItems = [];
let newRows = [];
const colori = { MEDICA: "red", DIGITAL: "blue", PROGETTAZIONE: "green" };
let dipendenze = [];
let firstDay = 0;
let startDayjs;
let endDayjs = 0;
let oreTotali = 0;

$.get(
  "/schedulerXp/assets/json/calendar/json_insert_commessa.php",
  function (response) {
    console.log('JSON: ', response);
    response.forEach((progetto) => {
      if (new Date(progetto["Data consegna prevista"]).getTime() > endDayjs) {
        endDayjs = GSTC.api.date(progetto["Data consegna prevista"]);
      }
      console.log('Progetto: ', progetto);
      console.log('Componenti: ', progetto["Componenti"]);
      // handle your response here
      var key,
        count = 0;

      // Check if every key has its own property
      for (key in progetto["Componenti"]) {
        if (progetto["Componenti"].hasOwnProperty(key))
          // If the key is found, add it to the total length
          count++;
      }
      for (key in progetto["Componenti"]) {
        const componente = progetto["Componenti"][key];
        const risorse = componente["Lavorazioni"];
        risorse.forEach((element) => {
          risorse.forEach((element2) => {
            if (element2["Dipendenza da"] !== "") {
              for (var l in element2["Dipendenza da"]) {
                if (
                  element["Codice lavorazione"].toString() ==
                  element2["Dipendenza da"][l].toString().split('-')[0].trim()
                ) {
                  dipendenze.push(
                    GSTC.api.GSTCID(element2["Codice lavorazione"].toString())
                  );
                }
              }
            }
            if (element["Codice lavorazione"].toString() == "0") {
              if (element2["Ore lavorazione"] == 0) {
                oreTotali += 1;
              } else {
                oreTotali += element2["Ore lavorazione"];
              }
            }
          });
          if (element["Dipendenza da"] !== "") {
            startDayjs = GSTC.api
              .date(allItems[element["Dipendenza da"][0][0]].time.end)
              .startOf("hour");
          } else {
            var dataConsegna = new Date(progetto["Data consegna prevista"]);
            console.log('data consegna: ', element["Codice lavorazione"].toString(), dataConsegna);
            const giorniAppossimativi = oreTotali / 8;
            var dataInizio = new Date(
              dataConsegna.getTime() - giorniAppossimativi * 24 * 60 * 60 * 1000
            );
            console.log('data inizio: ',element["Codice lavorazione"].toString(), dataInizio);
            startDayjs = GSTC.api.date(dataInizio.getTime());
            if(firstDay === 0){
              firstDay = startDayjs;
            }
            if (dataInizio.getTime() < firstDay) {
              firstDay = startDayjs;
            }
          }
          let oreLavoro;
          if (element["Ore lavorazione"] == 0) {
            oreLavoro = 1;
          } else {
            oreLavoro = element["Ore lavorazione"];
          }
          var newItem = {
            id: element["Codice lavorazione"].toString(),
            label: element["Descrizione lavorazione"],
            rowId: element["Codice lavorazione"].toString(),
            time: {
              start: startDayjs.valueOf(),
              end: startDayjs.clone().add(oreLavoro, "hour").valueOf(),
            },
            dependant: vars.length > 0 ? "" : dipendenze,
            style: {
              background:
                element["Settore"]["Descrizione settore"] == "" &&
                element["Settore"]["Flag"] == "Esterno"
                  ? "orange"
                  : colori[element["Settore"]["Descrizione settore"]],
            },
          };
          if (vars.length > 0) {
            if (vars[0] == element["Settore"]["Descrizione settore"]) {
              newItems.push(newItem);
            }
            if (
              vars[0] == "CLIENTE" &&
              element["Settore"]["Descrizione settore"] == "" &&
              element["Settore"]["Flag"] == "Esterno"
            ) {
              newItems.push(newItem);
            }
          } else {
            newItems.push(newItem);
          }
          allItems.push(newItem);
          var newRow = {
            id: element["Codice lavorazione"].toString(),
            label: element["Descrizione lavorazione"],
          };
          newRows.push(newRow);
          console.log('Dipendenze: ', element["Codice lavorazione"].toString(), dipendenze);
          dipendenze = [];
        });
      }
    });

    const date = GSTC.api.date;

    // Configuration object
    const config = {
      // for free key for your domain please visit https://gstc.neuronet.io/free-key
      // if you need commercial license please visit https://gantt-schedule-timeline-calendar.neuronet.io/pricing

      licenseKey:
        "====BEGIN LICENSE KEY====\nib1KONTKu7juyzV3eVk3ZQsLf3cMlAbkRcMbEfqtMKZr4whjAPdQXJRgGqWPgcbTUnZl9a+3dDxKYD0vyOJu8beez0jQGVSrTINYWvnSSjU7/B0YlpVbXmkebGfkpSHRano65rxM49RLMcM+jGiX9RwDhg6gX4VvatRsMBBcTdfllFE1/aWA9CbZvZsTzk5Snm/3eZtiTN6bd5WrzNNoDRBgJElmnrYQ0JYkGIZlhZqE1PDKEF7sIUZe75+ai5FynuJPtPfrSq/pLWSlHjRpLmosjEKseyrjSYwAVURQZKtX6cjKGdP8NTQJLpVy2CWyiEvKn4JgFvc8qBbuOeAM0w==||U2FsdGVkX1/kGtD+keAPx2k4u5Z+5yC8d4FJKg5OY20D/dVN218OOeC+PHpqsOI/yLNkc6UAFhumu/OAGchXOddRtPwD55YJIk0N/Y9BahM=\nZtynleMOKEvq2cINqJXo9mosh0cO3FmH3/0L0GJ6YZNo7G7HQpr1AaD3yPEREtnAHPrDnaehhRMNy4ace4FEITOd0Fk+PgdnT6vS3LutC4mTACsdKlV/s8QbDbsoehZ8odA4amfK0Sai2AL+BB8I3JalflpOvmHFw5yl5Ml4W/EOcYhN6WdoCNEp5Egbwrbh2igC2xn19gowNl+pqRhCrhwCWZ3hTQPl9/YOA/DrUDMD044tul6mCVFMyAqDtjDn9ChsotIkW8E3FNkzJA8QKlukXh/V4+JA7kWst2NFQOm1LDVS5ND5ZKmaVcL7ou/e4ee6B67jhQ+mf2zuwshFAA==\n====END LICENSE KEY====",

      actions: {
        "chart-timeline-items-row-item": [clickAction],
      },
      plugins: [
        TimelinePointer({}), // timeline pointer must go first before selection, resizing and movement
        Selection(),
        ItemResizing(resizingPluginConfig), // resizing must go before movement
        ItemMovement(movementPluginConfig),
        DependencyLines({
          onLine: [
            (line) => {
              line.type =
                GSTC.api.sourceID(line.fromItem.id) === "3"
                  ? "smooth"
                  : "square";
              return line;
            },
          ],
        }),
      ],
      list: {
        columns: {
          data: GSTC.api.fromArray(columnsFromDB),
        },
        rows: GSTC.api.fromArray(newRows),
      },
      chart: {
        // items: GSTC.api.fromArray(itemsFromDB),
        items: GSTC.api.fromArray(newItems),
        calendarLevels: [hours, minutes],
        // time: {
        //   zoom: 13,
        //   from: firstDay.startOf("hour").valueOf(),
        //   to: endDayjs.valueOf(),
        // },
        time: {
          zoom: levelZoom,
          onLevelDates: [({ dates }) => dates],
          onCurrentViewLevelDates: [({ dates }) => dates],
          onDate: [({ date }) => date],
        },
      },
    };

    // Generate GSTC state from configuration object
    state = GSTC.api.stateFromConfig(config);

    setTimeout(() => {
      // change month to february after 4sec
      state.update("config.chart.time", (time) => {
        time.from = firstDay.startOf("hour").valueOf();
        time.to = endDayjs.valueOf();
        return time;
      });
    }, 100);

    // for testing
    // @ts-ignore
    window.state = state;

    // Mount the component
    const app = GSTC({
      element: document.getElementById("gstc"),
      state,
    });
  }
);

function zoomIn() {
  state.update("config.chart.time.zoom", (zoom) => {
    zoom = zoom - 0.1;
    return zoom;
  });
}

function zoomOut() {
  state.update("config.chart.time.zoom", (zoom) => {
    zoom = zoom + 0.1;
    return zoom;
  });
}

const itemsFromDB = [
  {
    id: "1",
    label: "Item 1",
    rowId: "1",
    time: {
      start: GSTC.api
        .date("2020-01-01")
        .startOf("day")
        .add(12, "hour")
        .valueOf(),
      end: GSTC.api.date("2020-01-02").endOf("day").add(12, "hour").valueOf(),
    },
    dependant: [GSTC.api.GSTCID("3")],
  },
  {
    id: "2",
    label: "Item 2",
    rowId: "1",
    time: {
      start: GSTC.api
        .date("2020-01-08")
        .startOf("day")
        .add(12, "hour")
        .valueOf(),
      end: GSTC.api.date("2020-01-15").endOf("day").add(12, "hour").valueOf(),
    },
    style: { background: "blue" },
  },
  {
    id: "3",
    label: "Item 3",
    rowId: "2",
    time: {
      start: GSTC.api
        .date("2020-01-5")
        .startOf("day")
        .add(12, "hour")
        .valueOf(),
      end: GSTC.api.date("2020-01-07").endOf("day").add(12, "hour").valueOf(),
    },
    dependant: [GSTC.api.GSTCID("2")],
  },
];

const columnsFromDB = [
  {
    id: "id",
    label: "ID",
    data: ({ row }) => GSTC.api.sourceID(row.id), // show original id (not internal GSTCID)
    sortable: ({ row }) => Number(GSTC.api.sourceID(row.id)), // sort by id converted to number
    width: 80,
    header: {
      content: "ID",
    },
  },
  {
    id: "label",
    data: "label",
    sortable: "label",
    isHTML: false,
    width: 230,
    header: {
      content: "Label",
    },
  },
];

//for testing
// @ts-ignore
// window.gstc = app;

function addNewRow() {
  const row = generateNewRow();
  state.update(`config.list.rows.${row.id}`, row);
}
// @ts-ignore
window.addNewRow = addNewRow;

function addNewItem() {
  const item = generateNewItem();
  state.update(`config.chart.items.${item.id}`, item);
}
// @ts-ignore
window.addNewItem = addNewItem;

function generateNewRow() {
  return {
    id: GSTC.api.GSTCID(String(++lastRowId)),
    label: `Row ${lastRowId}`,
  };
}

function generateNewItem() {
  let rowId = GSTC.api.GSTCID(String(lastRowId - 1));
  let id = GSTC.api.GSTCID(String(++lastItemId));
  return {
    id,
    label: "item id " + GSTC.api.sourceID(id),
    progress: Math.round(Math.random() * 100),
    time: {
      start: GSTC.api
        .date("2020-01-08")
        .startOf("day")
        .add(12, "hour")
        .valueOf(),
      end: GSTC.api.date("2020-01-15").endOf("day").add(12, "hour").valueOf(),
    },
    rowId,
  };
}

function generateJSON() {
  state.update("config.chart.items", (items) => {
    console.log(items);
    return items;
  });
  var ajaxhttp = new XMLHttpRequest();
  var url = '/schedulerXp/assets/json/calendar/json_insert_commessa.php';
  
  ajaxhttp.open('GET', url, true);
  ajaxhttp.setRequestHeader('Content-Type', 'application/json');
  ajaxhttp.onreadystatechange = function(){
    if(ajaxhttp.readyState == 4 && ajaxhttp.status == 200){
      var jcontent = JSON.parse(ajaxhttp.responseText);
      console.log('jcontent: ', jcontent);
      console.log('ajaxhttp', ajaxhttp);
      $.ajax({
        type: 'POST',
        url: 'writeJSON.php',
        dataType: 'json',
        data: {'categories': jcontent},
        success: function(msg) {
          alert(msg);
        }
      });
      var link = document.createElement("a");
          link.download = 'data_out.json';
          link.href = '/schedulerXp/data_out.json';
          link.click();
    }
  }
  ajaxhttp.send(null);
  console.log(ajaxhttp);
}

function MEDICA() {
  window.location.href = 'https://' + window.location.host + window.location.pathname + '?type=MEDICA'
}
function DIGITAL() {
  window.location.href = 'https://' + window.location.host + window.location.pathname + '?type=DIGITAL';
}
function PROGETTAZIONE() {
  window.location.href = 'https://' + window.location.host + window.location.pathname + '?type=PROGETTAZIONE';
}
function INVIOALCLIENTE() {
  window.location.href = 'https://' + window.location.host + window.location.pathname + '?type=CLIENTE';
}
function ALL() {
  window.location.href = 'https://' + window.location.host + window.location.pathname;
}

// document.getElementById("add-item").addEventListener("click", addNewItem);
// document.getElementById("add-row").addEventListener("click", addNewRow);
document.getElementById("zoomIn").addEventListener("click", zoomIn);
document.getElementById("zoomOut").addEventListener("click", zoomOut);
document.getElementById("generateJSON").addEventListener("click", generateJSON);
document.getElementById("MEDICA").addEventListener("click", MEDICA);
document.getElementById("DIGITAL").addEventListener("click", DIGITAL);
document
  .getElementById("PROGETTAZIONE")
  .addEventListener("click", PROGETTAZIONE);
document
  .getElementById("INVIOALCLIENTE")
  .addEventListener("click", INVIOALCLIENTE);
document.getElementById("ALL").addEventListener("click", ALL);
