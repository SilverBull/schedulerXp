import GSTC from "./assets/js/gantt-schedule/gstc.esm.min.js";
import { Plugin as TimelinePointer } from "./assets/js/gantt-schedule/plugins/timeline-pointer.esm.min.js";
import { Plugin as Selection } from "./assets/js/gantt-schedule/plugins/selection.esm.min.js";
import { Plugin as ItemMovement } from "./assets/js/gantt-schedule/plugins/item-movement.esm.min.js";
import { Plugin as ItemResizing } from "./assets/js/gantt-schedule/plugins/item-resizing.esm.min.js";
import { Plugin as DependencyLines } from "./assets/js/gantt-schedule/plugins/dependency-lines.esm.min.js";

let canChangeRow = false;
let canCollide = true;

let lastItemId = 3;
let lastRowId = 2;

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
      console.log('Moving start', items.after);
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
      console.log('Moving done', items.after);
      return items.after;
    },
  },
  snapToTime: {
    start({ startTime, time }) {
      // return startTime.startOf("day").add(12, "hour");
      return startTime.startOf("hour");
    },
  },
};

const resizingPluginConfig = {
  events: {
    onStart({ items }) {
      console.log('Resizing start', items.after);
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
      return filtered;
    },
    onEnd({ items }) {
      console.log('Resizing done', items.after);
      return items.after;
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
  if (typeof item.resizable === 'boolean') return item.resizable;
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

function snapToTimeSeparately(item) {
  if (!item.snap) return item;
  const start = GSTC.api.date(item.time.start).startOf('day').add(10, 'hour');
  const end = GSTC.api.date(item.time.end).startOf('day').add(18, 'hour');
  item.time.start = start.valueOf();
  item.time.end = end.valueOf();
  // to change other properties than time we need to update item
  // because resizing-items plugin only works on time property
  state.update(
    `config.chart.items.${item.id}.label`,
    `From ${start.format('YYYY-MM-DD HH:mm')} to ${end.format(
      'YYYY-MM-DD HH:mm'
    )}`
  );
  return item;
}

const hours = [
  {
    zoomTo: 100, // we want to display this format for all zoom levels until 100
    period: 'hour',
    periodIncrement: 1,
    format({ timeStart }) {
      return timeStart.format('HH:mm DD MMMM YYYY'); // full list of formats: https://day.js.org/docs/en/display/format
    },
  },
];

const minutes = [
  {
    zoomTo: 100, // we want to display this format for all zoom levels until 100
    period: 'minute',
    periodIncrement: 15,
    main: true,
    format({ timeStart, vido }) {
      return vido.html`<div style="text-align:center;">${timeStart.format('HH:mm')}</div>`; // full list of formats: https://day.js.org/docs/en/display/format
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
let newRows = [];
const colori = { MEDICAL: "red", DIGITAL: "blue", PROGETTAZIONE: "green" };
let dipendenze = [];
let startDayjs;
$.get(
  "/schedulerXp/assets/json/calendar/json_insert_commessa.php",
  function (response) {
    console.log(response);
    console.log(response["Componenti"]);
    // handle your response here
    var key,
      count = 0;

    // Check if every key has its own property
    for (key in response["Componenti"]) {
      if (response["Componenti"].hasOwnProperty(key))
        // If the key is found, add it to the total length
        count++;
    }
    for (key in response["Componenti"]) {
      const componente = response["Componenti"][key];
      const risorse = componente["Lavorazioni"];
      risorse.forEach((element) => {
        risorse.forEach((element2) => {
          if (element2["Dipendenza da"] !== "") {
            for (var l in element2["Dipendenza da"]) {
              if (
                element["Codice lavorazione"].toString() ==
                element2["Dipendenza da"][l][0].toString()
              ) {
                dipendenze.push(
                  GSTC.api.GSTCID(element2["Codice lavorazione"].toString())
                );
              }
            }
          }
        });
        if (element["Dipendenza da"] !== "") {
          // for (var k in element["Dipendenza da"]) {
          //   dipendenze.push(
          //     GSTC.api.GSTCID(element["Dipendenza da"][k][0].toString())
          //   );
          // }
          startDayjs = GSTC.api
            .date(newItems[element["Dipendenza da"]["1"][0]].time.end)
            .startOf("hour");
        } else {
          startDayjs = GSTC.api
            .date(response["Componenti"]["1"]["Data consegna effettiva"]);
        }
        var newItem = {
          id: element["Codice lavorazione"].toString(),
          label: element["Descrizione lavorazione"],
          rowId: element["Codice lavorazione"].toString(),
          time: {
            start: startDayjs.valueOf(),
            end: startDayjs
              .clone()
              .add(element["Ore lavorazione"], "hour")
              .valueOf(),
          },
          dependant: dipendenze,
          style: {
            background:
              element["Descrizione lavorazione"] === "Invio al cliente"
                ? "orange"
                : colori[element["Settore"]["Descrizione settore"]],
          },
        };
        newItems.push(newItem);
        var newRow = {
          id: element["Codice lavorazione"].toString(),
          label: element["Descrizione lavorazione"],
        };
        newRows.push(newRow);
        dipendenze = [];
      });
    }

    // Configuration object
    const config = {
      // for free key for your domain please visit https://gstc.neuronet.io/free-key
      // if you need commercial license please visit https://gantt-schedule-timeline-calendar.neuronet.io/pricing

      licenseKey:
        "====BEGIN LICENSE KEY====\nib1KONTKu7juyzV3eVk3ZQsLf3cMlAbkRcMbEfqtMKZr4whjAPdQXJRgGqWPgcbTUnZl9a+3dDxKYD0vyOJu8beez0jQGVSrTINYWvnSSjU7/B0YlpVbXmkebGfkpSHRano65rxM49RLMcM+jGiX9RwDhg6gX4VvatRsMBBcTdfllFE1/aWA9CbZvZsTzk5Snm/3eZtiTN6bd5WrzNNoDRBgJElmnrYQ0JYkGIZlhZqE1PDKEF7sIUZe75+ai5FynuJPtPfrSq/pLWSlHjRpLmosjEKseyrjSYwAVURQZKtX6cjKGdP8NTQJLpVy2CWyiEvKn4JgFvc8qBbuOeAM0w==||U2FsdGVkX1/kGtD+keAPx2k4u5Z+5yC8d4FJKg5OY20D/dVN218OOeC+PHpqsOI/yLNkc6UAFhumu/OAGchXOddRtPwD55YJIk0N/Y9BahM=\nZtynleMOKEvq2cINqJXo9mosh0cO3FmH3/0L0GJ6YZNo7G7HQpr1AaD3yPEREtnAHPrDnaehhRMNy4ace4FEITOd0Fk+PgdnT6vS3LutC4mTACsdKlV/s8QbDbsoehZ8odA4amfK0Sai2AL+BB8I3JalflpOvmHFw5yl5Ml4W/EOcYhN6WdoCNEp5Egbwrbh2igC2xn19gowNl+pqRhCrhwCWZ3hTQPl9/YOA/DrUDMD044tul6mCVFMyAqDtjDn9ChsotIkW8E3FNkzJA8QKlukXh/V4+JA7kWst2NFQOm1LDVS5ND5ZKmaVcL7ou/e4ee6B67jhQ+mf2zuwshFAA==\n====END LICENSE KEY====",

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
        time: {
          zoom: 13,
          from: GSTC.api.date('2020-12-03').startOf('day').valueOf(),
          to: GSTC.api.date('2020-12-03').endOf('day').valueOf(),
        },
      },
    };

    // Generate GSTC state from configuration object
    const state = GSTC.api.stateFromConfig(config);

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
window.gstc = app;

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

// document.getElementById("add-item").addEventListener("click", addNewItem);
// document.getElementById("add-row").addEventListener("click", addNewRow);
