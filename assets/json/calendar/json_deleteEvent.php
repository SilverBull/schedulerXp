<?php
include '../../../config.php';

if(!empty($_GET['eventId'])){
    $database->update("event_calendar",["hide" => 1], ["id"=>$_GET['eventId']]);
}

?>