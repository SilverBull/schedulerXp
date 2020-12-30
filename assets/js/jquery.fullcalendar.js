! function ($) {
    "use strict";

    var CalendarApp = function () {
        this.$body = $("body")
        this.$modal = $('#event-modal'),
            this.$event = ('#external-events div.external-event'),
            this.$calendar = $('#calendar'),
            this.$saveCategoryBtn = $('.save-category'),
            this.$categoryForm = $('#add-category form'),
            this.$extEvents = $('#external-events'),
            this.$calendarObj = null
    };


    /* on drop */
    CalendarApp.prototype.onDrop = function (eventObj, date) {
            var $this = this;
            // retrieve the dropped element's stored Event Object
            var originalEventObject = eventObj.data('eventObject');
            var $categoryClass = eventObj.attr('data-class');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            if ($categoryClass)
                copiedEventObject['className'] = [$categoryClass];
            // render the event on the calendar
            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                eventObj.remove();
            }
        },
        /* on click on event */
        CalendarApp.prototype.onEventClick = function (calEvent, jsEvent, view) {
            var $this = this;
            var temp = new Date(calEvent.start);
            var startDate = (temp.getDay() + 1) + "/" + temp.getMonth() + "/" + temp.getFullYear();
            var startTime = temp.getHours() + ":" + temp.getMinutes();

            temp = new Date(calEvent.end);
            var endDate = (temp.getDay() + 1) + "/" + temp.getMonth() + "/" + temp.getFullYear();
            var endTime = temp.getHours() + ":" + temp.getMinutes();

            var form = $("<form></form>");
            form.append("<div class='row' id='row1'></div>");
            form.find("#row1")
                .append("<div class='col-md-12'><div class='form-group'><label>Nome task</label><input class='form-control' type='text' name='title' id='descriptionOnClick' value='" + calEvent.title + "'/></div></div>");
            form.append("<div class='row' id='row2'></div>");
            form.find("#row2")
                .append("<div class='col-md-6'><div class='form-group'><label>Data inizio<span class='text-danger'>*</span></label><div class='cal-icon'><input class='form-control datetimepicker' value='" + startDate + "' id='dateStartEventOnClick' type='text'></div></div></div></div>")
                .append("<div class='col-md-6'><div class='form-group'><label>Ora inizio<span class='text-danger'>*</span></label><div class='cal-icon'><input class='form-control timepicker' value='" + startTime + "' id='timeStartEventOnClick' type='text'></div></div></div></div>");
            form.append("<div class='row' id='row3'></div>");
            form.find("#row3")
                .append("<div class='col-md-6'><div class='form-group'><label>Data fine<span class='text-danger'>*</span></label><div class='cal-icon'><input class='form-control datetimepicker' value='" + endDate + "' id='dateEndEventOnClick' type='text'></div></div></div></div>")
                .append("<div class='col-md-6'><div class='form-group'><label>Ora fine<span class='text-danger'>*</span></label><div class='cal-icon'><input class='form-control timepicker' value='" + endTime + "' id='timeEndEventOnClick' type='text'></div></div></div></div>");
            form.append("<div class='row' id='row4'></div>");
            form.find("#row4")
                .append("<div class='col-md-12'><div class='form-group'><label>Category</label><select class='select form-control' name='category' id='categoryOnClick'></select></div></div>")
                .find("select[name='category']")
                .append("<option value='bg-danger'>Danger</option>")
                .append("<option value='bg-success'>Success</option>")
                .append("<option value='bg-info'>Info</option>")
                .append("<option value='bg-primary'>Primary</option>")
                .append("<option value='bg-warning'>Warning</option></div></div>");
            form.append("<div class='row' id='row5'></div>");
            form.find("#row5")
                .append("<script>$('.datetimepicker').datetimepicker({format: 'DD/MM/YYYY' });$('.timepicker').datetimepicker({format: 'HH:mm'}); $('#categoryOnSelect').val('" + calEvent.className + "');</script>")
            $this.$modal.modal({
                backdrop: 'static'
            });
            $this.$modal.find('.delete-event').show().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                deleteEvent(calEvent.id);
                // $this.$calendarObj.fullCalendar('removeEvents', function (ev) {
                //     deleteEvent(calEvent.id);

                //     return (ev._id == calEvent._id);
                // });
                $this.$modal.modal('hide');
            });
            $this.$modal.find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                updateEvent(calEvent.id);
                // calEvent.title = form.find("input[type=text]").val();
                // $this.$calendarObj.fullCalendar('updateEvent', calEvent);
                $this.$modal.modal('hide');
                return false;
            });
        },
        /* on select */
        CalendarApp.prototype.onSelect = function (start, end, allDay) {
            var $this = this;
            $this.$modal.modal({
                backdrop: 'static'
            });
            var form = $("<form></form>");
            form.append("<div class='row' id='row1'></div>");
            form.find("#row1")
                .append("<div class='col-md-12'><div class='form-group'><label>Nome task</label><input class='form-control' type='text' name='title' id='descriptionOnSelect'/></div></div>");
            form.append("<div class='row' id='row2'></div>");
            form.find("#row2")
                .append("<div class='col-md-12'><div class='form-group'><label>Ora inizio<span class='text-danger'>*</span></label><div class='cal-icon'><input class='form-control timepicker' id='timeStartEventOnSelect' type='text'></div></div></div></div>");
            form.append("<div class='row' id='row3'></div>");
            form.find("#row3")
                .append("<div class='col-md-12'><div class='form-group'><label>Ora fine<span class='text-danger'>*</span></label><div class='cal-icon'><input class='form-control timepicker' id='timeEndEventOnSelect' type='text'></div></div></div></div>");
            form.append("<div class='row' id='row4'></div>");
            form.find("#row4")
                .append("<div class='col-md-12'><div class='form-group'><label>Category</label><select class='select form-control' name='category' id='categoryOnSelect'></select></div></div>")
                .find("select[name='category']")
                .append("<option value='bg-danger'>Danger</option>")
                .append("<option value='bg-success'>Success</option>")
                .append("<option value='bg-info'>Info</option>")
                .append("<option value='bg-primary'>Primary</option>")
                .append("<option value='bg-warning'>Warning</option></div></div>");
            form.append("<div class='row' id='row5'></div>");
            form.find("#row5")
                .append("<script>$('.timepicker').datetimepicker({format: 'HH:mm'});</script>");
            $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
                // form.submit();
                insertEventOnSelect(start);
                //$this.modal('toggle');
            });
            // $this.$modal.find('form').on('submit', function () {
            //     var title = form.find("input[name='title']").val();
            //     var beginning = form.find("input[name='beginning']").val();
            //     var ending = form.find("input[name='ending']").val();
            //     var categoryClass = form.find("select[name='category'] option:checked").val();
            //     if (title !== null && title.length != 0) {
            //         $this.$calendarObj.fullCalendar('renderEvent', {
            //             title: title,
            //             start:start,
            //             end: end,
            //             allDay: false,
            //             className: categoryClass
            //         }, true);  
            //         $this.$modal.modal('hide');
            //     }
            //     else{
            //         alert('You have to give a title to your event');
            //     }
            //     return false;

            // });
            $this.$calendarObj.fullCalendar('unselect');
        },
        CalendarApp.prototype.enableDrag = function () {
            //init events
            $(this.$event).each(function () {
                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };
                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);
                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 999,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });
            });
        },
        CalendarApp.prototype.onEventDrop = function (event, delta, revertFunc) {
            alert(event.title + " è stato spostato al giorno " + event.start.format('DD/MM/YYYY HH:mm') + " e finirà il giorno: " + event.end.format('DD/MM/YYYY HH:mm'));

            if (!confirm("Sei sicuro di voler spostare il task: " + event.title)) {
                revertFunc();
            } else {
                updateEventOnDrop(event.start.format('DD/MM/YYYY HH:mm'), event.end.format('DD/MM/YYYY HH:mm'), event.id);
            }


        },
        /* Initializing */
        CalendarApp.prototype.init = function () {
            this.enableDrag();
            /*  Initialize the calendar  */
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var form = '';
            var today = new Date($.now());
            var tomorrow = new Date($.now());
            tomorrow.setDate(tomorrow.getDate() + 1);

            var eventDb = (function () {
                var json = null;
                $.ajax({
                    'async': false,
                    'global': false,
                    'url': 'assets/json/calendar/json_getEvent.php',
                    'dataType': "json",
                    'success': function (data) {
                        json = data;
                    }
                });
                return json;
            })();

            // var defaultEvents =  [{
            //         title: 'Event Name 1',
            //         start: new Date($.now() + 148000000),
            //         className: 'bg-danger'
            //     },
            //     {
            //         title: 'Test Event 2',
            //         start: today,
            //         end: tomorrow,
            //         className: 'bg-success'
            //     },
            //     {
            //         title: 'Test Event 3',
            //         start: new Date($.now() + 168000000),
            //         className: 'bg-info'
            //     },
            //     {
            //         title: 'Test Event 4',
            //         start: new Date($.now() + 338000000),
            //         className: 'bg-warning'
            //     },
            //     {
            //         title: 'Test Event 5',
            //         start: new Date($.now() + 238000000),
            //         className: 'bg-primary'
            //     }];

            var $this = this;
            $this.$calendarObj = $this.$calendar.fullCalendar({
                //slotDuration: '00:01:00', /* If we want to split day time each 15minutes */
                minTime: '07:00:00',
                maxTime: '23:59:00',
                defaultView: 'month',
                handleWindowResize: true,
                height: $(window).height() - 200,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                locale: 'it',
                events: eventDb,
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                drop: function (date) {
                    $this.onDrop($(this), date);
                },
                select: function (start, end, allDay) {
                    $this.onSelect(start, end, allDay);
                },
                eventClick: function (calEvent, jsEvent, view) {
                    $this.onEventClick(calEvent, jsEvent, view);
                },
                eventDrop: function (event, delta, revertFunc) {
                    $this.onEventDrop(event, delta, revertFunc);
                }
            });

            //on new event
            this.$saveCategoryBtn.on('click', function () {
                var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
                var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
                if (categoryName !== null && categoryName.length != 0) {
                    $this.$extEvents.append('<div class="external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="mdi mdi-checkbox-blank-circle m-r-10 vertical-middle"></i>' + categoryName + '</div>')
                    $this.enableDrag();
                }

            });
        },

        //init CalendarApp
        $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp


}(window.jQuery),

//initializing CalendarApp
function ($) {
    "use strict";
    $.CalendarApp.init();
}(window.jQuery);