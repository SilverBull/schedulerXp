<!DOCTYPE html>
<html lang="en">
<?php
// include 'config.php';
include_once 'header.php';
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body class="mini-sidebar">
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box mb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="toolbox">
                                    <button class="btn btn-primary" id="zoomIn">Zoom In</button>
                                    <button class="btn btn-primary" id="zoomOut">Zoom Out</button>
                                    <button class="btn btn-primary" id="test">Test</button>
                                    <ul class="list-group list-group-horizontal">
                                        <li class="list-group-item list-group-item-danger">
                                            <div class="row">
                                                <div class="legenda_red"></div> <button class="btn btn-link" id="MEDICA">MEDICA</button>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-primary">
                                            <div class="row">
                                                <div class="legenda_blu"></div> <button class="btn btn-link" id="DIGITAL">DIGITAL</button>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-success">
                                            <div class="row">
                                                <div class="legenda_green"></div> <button class="btn btn-link" id="PROGETTAZIONE">PROGETTAZIONE</button>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-warning">
                                            <div class="row">
                                                <div class="legenda_orange"></div> <button class="btn btn-link" id="INVIO AL CLIENTE">INVIO AL CLIENTE</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="gstc"></div>
                                <script type="module" src="./gantt-schedule.js"></script>
                                <link rel="stylesheet" href="./assets/js/gantt-schedule/style.css">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="legenda">

                <style>
                    .legenda_red {
                        width: 25px;
                        height: 25px;
                        background: red;
                    }

                    .legenda_blu {
                        width: 25px;
                        height: 25px;
                        background: blue;
                    }

                    .legenda_green {
                        width: 25px;
                        height: 25px;
                        background: green;
                    }

                    .legenda_orange {
                        width: 25px;
                        height: 25px;
                        background: orange;
                    }
                </style>
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
</body>

</html>