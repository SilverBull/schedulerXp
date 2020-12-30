<?php
include '../../../config.php';

if(!empty($_GET['description']) && !empty($_GET['dateStart']) && !empty($_GET['dateEnd']) && !empty($_GET['category'])){
    $database->insert("event_calendar",
    [
        "description" => $_GET['description'],
        "start_momentDt" => $_GET['dateStart'],
        "end_momentDt" => $_GET['dateEnd'],
        "priority" => $_GET['category']
    ]);

}

?>