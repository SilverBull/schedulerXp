<!DOCTYPE html>
<html lang="en">
<?php
include 'config.php';
include_once 'header.php';
?>

<body class="mini-sidebar">
    <div class="main-wrapper">
        <?php
        include_once 'top_menu.php';
        include_once 'menu.php';

        $calendarType = "";

        switch ($_GET['type']) {
            case 'azienda':
                $calendarType = "Azienda";
                break;
            case 'settoreMedica':
                $calendarType = "Settore Medica";
                break;
            case 'settoreProgettazione':
                $calendarType = "Settore Progettazione";
                break;
            case 'settoreDigital':
                $calendarType = "Settore Digital";
                break;
            case 'risorsa':
                $calendarType = "Risorsa";
                break;
        }
        ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-8 col-4">
                        <h4 class="page-title">Calendario <?= $calendarType ?></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box mb-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <?php
                                    switch ($_GET['type']) {
                                        case 'settore':
                                    ?>
                                            <label for="settoreId">Settore</label>
                                            <select class="form-control" id="settoreId">
                                                <option value="1">MEDICA</option>
                                                <option value="2">PROGETTAZIONE</option>
                                                <option value="3">DIGITAL</option>
                                            </select>
                                        <?php
                                            break;
                                        case 'azienda':

                                        ?>
                                            <label for="clienteId">Cliente</label>
                                            <select class="form-control" id="clienteId">
                                                <option value="1">Cliente 1</option>
                                                <option value="2">Cliente 2</option>
                                                <option value="3">Cliente 3</option>
                                            </select>
                                        <?php
                                            break;
                                        case 'risorsa':
                                        ?>
                                            <label for="risorse_umaneId">Risorse umane</label>
                                            <select class="form-control" id="risorse_umaneId">
                                                <option value="1">Persona Qualunque</option>
                                                <option value="2">Tizio Qualunque</option>
                                                <option value="3">Clarabella Pippo</option>
                                                <option value="4">Minnie Topolino</option>
                                            </select>
                                    <?php
                                            break;
                                    }
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <?php
                                    if ($_GET['type'] == "azienda") {
                                    ?>
                                        <label for="settoreId">Settore</label>
                                        <select class="form-control" id="settoreId">
                                            <option value="1">MEDICA</option>
                                            <option value="2">PROGETTAZIONE</option>
                                            <option value="3">DIGITAL</option>
                                        </select>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box mb-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="attivitaId">Attività</label>
                                    <input type="text" class="form-control" id="attivitaId" name="attivitaId">
                                </div>
                                <?php
                                if ($_GET['type'] != 'risorsa') {
                                ?>
                                    <div class="col-md-4">
                                        <label for="attivitaId">Risorsa umana</label>
                                        <input type="text" class="form-control" id="risorseUmaneId" name="risorseUmaneId">
                                    </div>
                                <?php
                                }
                                ?>
                                <button type="button" class="btn btn-primary" id="search" name="search">Cerca</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box mb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="calendar"></div>
                                    <div class="modal fade none-border" id="event-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content modal-md">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add Event</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body"></div>
                                                <div class="modal-footer text-center">
                                                    <button type="button" class="btn btn-primary submit-btn save-event">Create event</button>
                                                    <button type="button" class="btn btn-danger btn-lg delete-event" data-dismiss="modal">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box mb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="chart_div"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <?php include_once("messages.php"); ?>
        </div>
        <div id="add_event" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Aggiungi task</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Nome task <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" id="description">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Data inizio<span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" id="dateStartEvent" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ora inizio<span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control timepicker" id="timeStartEvent" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Data fine<span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" id="dateEndEvent" type="text">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ora fine<span class="text-danger">*</span></label>
                                    <div class="cal-icon">
                                        <input class="form-control timepicker" id="timeEndEvent" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Priorità</label>
                                <select class="select form-control" name="category" id="category">
                                    <option value="bg-danger">Danger</option>
                                    <option value="bg-success">Success</option>
                                    <option value="bg-info">Info</option>
                                    <option value="bg-primary">Primary</option>
                                    <option value="bg-warning">Warning</option>
                                </select>
                            </div>
                            <div class="m-t-20 text-center">
                                <button type="button" class="btn btn-info" value="Inserisci" onclick="insertEvent()">Crea task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/jquery-ui.min.html"></script>

    <!--Calendar -->
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/locale-all.js"></script>
    <script src="assets/js/jquery.fullcalendar.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--FINE Calendar -->

    <script>
        function insertEvent() {
            var description = $('#description').val();
            var temp = $('#dateStartEvent').val().split("/");
            var dateStart = temp[2] + "-" + temp[1] + "-" + temp[0] + " " + $('#timeStartEvent').val();
            temp = $('#dateEndEvent').val().split("/");
            var dateEnd = temp[2] + "-" + temp[1] + "-" + temp[0] + " " + $('#timeEndEvent').val();
            var category = $('#category').val();

            $.ajax({
                'async': false,
                'global': false,
                'url': 'assets/json/calendar/json_insertEvent.php?description=' + description + "&dateStart=" + dateStart + "&dateEnd=" + dateEnd + "&category=" + category,
                'dataType': "json",
                'success': alert("Evento inserito")
            });

            $('#description').val("");
            $('#dateStartEvent').val("");
            $('#timeStartEvent').val("");
            $('#dateEndEvent').val("");
            $('#timeEndEvent').val("");
            $('#add_event').modal('toggle');

            var eventDb = getEvent();

            $('#calendar').fullCalendar('removeEvents');
            $('#calendar').fullCalendar('addEventSource', eventDb);
            $('#calendar').fullCalendar('refetchEvents');
        }

        function insertEventOnSelect(startDate) {
            var description = $('#descriptionOnSelect').val();

            var temp = new Date(startDate);
            var dateStart = temp.getFullYear() + "-" + temp.getMonth() + "-" + (temp.getDay() + 1) + " " + $('#timeStartEventOnSelect').val();
            var dateEnd = temp.getFullYear() + "-" + temp.getMonth() + "-" + (temp.getDay() + 1) + " " + $('#timeEndEventOnSelect').val();
            var category = $('#categoryOnSelect').val();

            $.ajax({
                'async': false,
                'global': false,
                'url': 'assets/json/calendar/json_insertEvent.php?description=' + description + '&dateStart=' + dateStart + '&dateEnd=' + dateEnd + '&category=' + category,
                'dataType': "json",
                'success': alert("Evento inserito")
            });

            $('#event-modal').modal('toggle');

            var eventDb = getEvent();

            $('#calendar').fullCalendar('removeEvents');
            $('#calendar').fullCalendar('addEventSource', eventDb);
            $('#calendar').fullCalendar('refetchEvents');
        }

        function deleteEvent(eventId) {
            $.ajax({
                'async': false,
                'global': false,
                'url': 'assets/json/calendar/json_deleteEvent.php?eventId=' + eventId,
                'dataType': "json",
                'success': alert("Task eliminato")
            });

            var eventDb = getEvent();

            $('#calendar').fullCalendar('removeEvents');
            $('#calendar').fullCalendar('addEventSource', eventDb);
            $('#calendar').fullCalendar('refetchEvents');
        }

        function updateEvent(eventId) {
            var description = $('#descriptionOnClick').val();
            var temp = $('#dateStartEventOnClick').val().split("/");
            var dateStart = temp[2] + "-" + temp[1] + "-" + temp[0] + " " + $('#timeStartEventClick').val();
            temp = $('#dateEndEventOnClick').val().split("/");
            var dateEnd = temp[2] + "-" + temp[1] + "-" + temp[0] + " " + $('#timeEndEventOnClick').val();
            var category = $('#categoryOnClick').val();

            $.ajax({
                'async': false,
                'global': false,
                'url': 'assets/json/calendar/json_updateEvent.php?description=' + description + '&dateStart=' + dateStart + '&dateEnd=' + dateEnd + '&category=' + category + '&eventId=' + eventId,
                'dataType': "json",
                'success': alert("Task aggiornato")
            });

            var eventDb = getEvent();

            $('#calendar').fullCalendar('removeEvents');
            $('#calendar').fullCalendar('addEventSource', eventDb);
            $('#calendar').fullCalendar('refetchEvents');
        }

        function updateEventOnDrop(startDate, endDate, eventId) {
            var temp = startDate.split(" ");
            var hourStart = temp[1];
            var tempDate = temp[0].split("/");
            var dateStart = tempDate[2] + "-" + tempDate[1] + "-" + tempDate[0] + " " + hourStart;

            var temp = endDate.split(" ");
            var hourEnd = temp[1];
            var tempDate = temp[0].split("/");
            var dateEnd = tempDate[2] + "-" + tempDate[1] + "-" + tempDate[0] + " " + hourEnd;

            $.ajax({
                'async': false,
                'global': false,
                'url': 'assets/json/calendar/json_updateEvent.php?dateStart=' + dateStart + '&dateEnd=' + dateEnd + '&eventId=' + eventId,
                'dataType': "json",
                'success': alert("Task aggiornato")
            });

            var eventDb = getEvent();

            $('#calendar').fullCalendar('removeEvents');
            $('#calendar').fullCalendar('addEventSource', eventDb);
            $('#calendar').fullCalendar('refetchEvents');
        }

        function getEvent() {

            var json = null;
            $.ajax({
                'async': false,
                'global': false,
                'url': 'assets/json/calendar/json_getEvent.php',
                'dataType': "json",
                'success': function(data) {
                    json = data;
                }
            });
            return json;
        }
    </script>
</body>


<!-- calendar24:03-->

</html>

<!-- google -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['gantt']
    });
    google.charts.setOnLoadCallback(drawChart);

    function daysToMilliseconds(days) {
        return days * 24 * 60 * 60 * 1000;
    }

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Task ID');
        data.addColumn('string', 'Task Name');
        data.addColumn('string', 'Resource');
        data.addColumn('date', 'Start Date');
        data.addColumn('date', 'End Date');
        data.addColumn('number', 'Duration');
        data.addColumn('number', 'Percent Complete');
        data.addColumn('string', 'Dependencies');

        data.addRows([
            // ['Research', 'Find sources',
            //     new Date(2015, 0, 1), new Date(2015, 0, 5), null, 100, null
            // ],
            // ['Write', 'Write paper',
            //     null, new Date(2015, 0, 9), daysToMilliseconds(3), 25, 'Research,Outline'
            // ],
            // ['Cite', 'Create bibliography',
            //     null, new Date(2015, 0, 7), daysToMilliseconds(1), 20, 'Research'
            // ],
            // ['Complete', 'Hand in paper',
            //     null, new Date(2015, 0, 10), daysToMilliseconds(1), 0, 'Cite,Write'
            // ],
            // ['Outline', 'Outline paper',
            //     null, new Date(2015, 0, 6), daysToMilliseconds(1), 100, 'Research'
            // ],
            [
                'DIGITAL1', 'Invio reference/modelli/schemi', 'DIGITAL',
                new Date(2020, 11, 07), new Date(2020, 11, 09), null, 100, null
            ],
            [
                'MEDICA', 'Copy Medica', 'MEDICA',
                new Date(2020, 11, 04), new Date(2020, 11, 04), null, 25, null
            ],
            [
                'DIGITAL2', 'Revisione Digital', 'DIGITAL',
                new Date(2020, 11, 20), new Date(2020, 11, 22), null, 50, 'DIGITAL1'
            ],
            [
                'Referente1', 'Invio al cliente', 'Referente',
                new Date(2020, 11, 10), new Date(2020, 11, 11), null, 75, null
            ],
            [
                'PROGETTAZIONE1', 'Grafica (rivista JCMT cartace)', 'PROGETTAZIONE',
                new Date(2020, 11, 15), new Date(2020, 11, 15), null, 100, null
            ],
            [
                'PROGETTAZIONE2', 'Proof (rivista JCMT)', 'PROGETTAZIONE',
                new Date(2020, 11, 18), new Date(2020, 11, 19), null, 15, null
            ],
            [
                'PROGETTAZIONE3', 'Grafica (rivista digitale)', 'PROGETTAZIONE',
                new Date(2020, 11, 17), new Date(2020, 11, 17), null, 100, null
            ],
            [
                'DIGITAL3', 'Controllo Qualità', 'DIGITAL',
                new Date(2020, 11, 22), new Date(2020, 11, 23), null, 0, 'DIGITAL2'
            ],
            [
                'Referente2', 'Invio al cliente', 'Referente',
                null, new Date(2020, 11, 29), daysToMilliseconds(3), 91, null
            ],
        ]);

        var options = {
            height: 800
        };

        var chart = new google.visualization.Gantt(document.getElementById('chart_div'));

        // chart.attachEvent("onTaskDrag", function(id, mode, task, original) {
        //     var modes = chart.config.drag_mode;
        //     if (mode == modes.move) {
        //         var diff = task.start_date - original.start_date;
        //         chart.eachTask(function(child) {
        //             child.start_date = new Date(+child.start_date + diff);
        //             child.end_date = new Date(+child.end_date + diff);
        //             chart.refreshTask(child.id, true);
        //         }, id);
        //     }
        // });
        // //rounds positions of the child items to scale
        // chart.attachEvent("onAfterTaskDrag", function(id, mode, e) {
        //     var modes = chart.config.drag_mode;
        //     if (mode == modes.move) {
        //         var state = chart.getState();
        //         chart.eachTask(function(child) {
        //             child.start_date = chart.roundDate({
        //                 date: child.start_date,
        //                 unit: state.scale_unit,
        //                 step: state.scale_step
        //             });
        //             child.end_date = chart.calculateEndDate(child.start_date,
        //                 child.duration, chart.config.duration_unit);
        //             chart.updateTask(child.id);
        //         }, id);
        //     }
        // });


        chart.draw(data, options);
    }
</script>