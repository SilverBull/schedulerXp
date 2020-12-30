
	// Calendar
	$(document).ready(function() {
        initThemeChooser({
            init: function(themeSystem) {
                $('#calendar').fullCalendar({
                    themeSystem: 'bootstrap4',
                    header: {
                        left: 'today',
                        center: 'prev,title,next',
                        right: 'month,agendaWeek,agendaDay,listMonth'
                    },
                    defaultView: isMobileDevice() ? "agendaDay" : "month",
                    viewRender: function(view, element) {
                        //    element.find('table.table-bordered').addClass('pmd-table table');
                    },
                    weekNumbers: false,
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    selectable: true,
                    selectHelper: true,
                    height: 900,
                    select: function(start, end, allDay) {
                        endtime = $.fullCalendar.formatDate(end, 'h:mm tt');
                        starttime = $.fullCalendar.formatDate(start, 'ddd, MMM d, h:mm tt');
                        var mywhen = starttime + ' - ' + endtime;
                        $('#createEventModal #apptStartTime').val(start);
                        $('#createEventModal #apptEndTime').val(end);
                        $('#createEventModal #apptAllDay').val(allDay);
                        $('#createEventModal #when').text(mywhen);
                        $('#createEventModal').modal('show');
                    },
                    events: [{
                            title: 'All Day Event',
                            start: '2018-07-01',
                            backgroundColor: '#000',
                            borderColor: '#000'
                        },
                        {
                            title: 'Long Event',
                            start: '2018-07-07',
                            end: '2018-07-10',
                            backgroundColor: '#edfcf9',
                            textColor: '#33b795',
                            borderColor: '#edfcf9'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2018-07-09T16:00:00',
                            backgroundColor: '#fff9e9',
                            textColor: '#d29026',
                            borderColor: '#fff9e9'
                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2018-07-16T16:00:00',
                            backgroundColor: '#ffebec',
                            textColor: '#df7172',
                            borderColor: '#ffebec'
                        },
                        {
                            title: 'Conference',
                            start: '2018-07-11',
                            end: '2018-07-13',
                            backgroundColor: '#f4f4ff',
                            textColor: '#7474cb',
                            borderColor: '#f4f4ff'
                        },
                        {
                            title: 'Meeting',
                            start: '2018-07-12T14:30:00',
                            backgroundColor: '#edfcf9',
                            textColor: '#33b795',
                            borderColor: '#edfcf9'
                        },
                        {
                            title: 'Happy Hour',
                            start: '2018-07-12T17:30:00',
                            backgroundColor: '#fff9e9',
                            textColor: '#d29026',
                            borderColor: '#fff9e9'
                        },
                        {
                            title: 'Dinner',
                            start: '2018-07-12T20:00:00',
                            backgroundColor: '#000',
                            borderColor: '#000'
                        },
                        {
                            title: 'Birthday Party',
                            start: '2018-07-13T07:00:00',
                            backgroundColor: '#edfcf9',
                            textColor: '#33b795',
                            borderColor: '#edfcf9'
                        },
                    ]
                });

                $('#submitButton').on('click', function(e) {
                    e.preventDefault();
                    doSubmit();
                });

                function doSubmit() {
                    $("#createEventModal").modal('hide');
                    console.log($('#apptStartTime').val());
                    console.log($('#apptEndTime').val());
                    console.log($('#apptAllDay').val());
                    $("#calendar").fullCalendar('renderEvent', {
                            title: $('#patientName').val(),
                            start: new Date($('#apptStartTime').val()),
                            end: new Date($('#apptEndTime').val()),
                            allDay: ($('#apptAllDay').val() == "true"),
                        },
                        true);
                }
            },
        });
    });

    function isMobileDevice() {
        return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
    };

    // add event  start date date and time picker 
    $('#evt-datepicker-start').datetimepicker({
        format: 'DD-MM-YYYY'
    });

    // add event End date date and time picker 
    $('#evt-datepicker-end').datetimepicker({
        useCurrent: false,
        format: 'DD-MM-YYYY'
    });

    // add event start date picker
    $("#evt-datepicker-start").on("dp.change", function (e) {
        $('#edit-datepicker-end').data("DateTimePicker").minDate(e.date);
    });
    // add event end date picker
    $("#evt-datepicker-end").on("dp.change", function (e) {
        $('#edit-datepicker-start').data("DateTimePicker").maxDate(e.date);
    });