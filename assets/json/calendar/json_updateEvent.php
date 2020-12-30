<?php
include '../../../config.php';

if(empty($_GET['description']))
    $description = $database->get("event_calendar", "description", ["id" => $_GET['eventId']]); 
else
    $description = $_GET['description'];

if(empty($_GET['category']))
    $category = $database->get("event_calendar", "priority", ["id" => $_GET['eventId']]);
else
    $category = $_GET['category'];

if(!empty($_GET['dateStart']) && !empty($_GET['dateEnd']) && !empty($_GET['eventId']) && !empty($description) && !empty($category)){
    $database->update("event_calendar",
    [
        "description" => $description,
        "start_momentDt" => $_GET['dateStart'],
        "end_momentDt" => $_GET['dateEnd'],
        "priority" => $category
    ],
    [
        "id" => $_GET['eventId']
    ]);

}

?>