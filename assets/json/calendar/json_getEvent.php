<?php
include '../../../config.php';
$risultato = array();

$data = $database->select('event_calendar','*',['hide[!]' => 1]);

$i=0;
foreach($data AS $row){
    $risultato[$i]['id'] = $row['id'];
    $risultato[$i]['title'] = $row['description'];
    $risultato[$i]['start'] = $row['start_momentDt'];
    $risultato[$i]['end'] = $row['end_momentDt'];
    $risultato[$i]['className'] = $row['priority'];
    $i++;
}

header('Content-Type: application/json');
echo json_encode($risultato);

?>