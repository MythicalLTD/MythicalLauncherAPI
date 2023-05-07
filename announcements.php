<?php

header('Content-Type: application/json');
include("sql.php");

$announcements = $mconn->query("SELECT * FROM announcements")->fetch_all(MYSQLI_ASSOC);
$json_array = array();

foreach ($announcements as $announcement) {
    $json_array[] = array(
        'Title' => $announcement['Title'],
        'Description' => $announcement['Description'],
        'Date' => $announcement['Date']
    );
}

$json_output = json_encode($json_array, JSON_PRETTY_PRINT);
echo $json_output;

?>
