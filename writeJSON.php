<?php
if (isset($_POST['categories'])) {
    $json = $_POST['categories'];
    // var_dump(json_decode($json, true));
    $fh = fopen("data_out.json", 'w')
        or die("Error opening output file");
    fwrite($fh, json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    fclose($fh);
    // $result['success'] = 'ok';
    // return json_encode($result);
} else {
    echo "Noooooooob";
}
