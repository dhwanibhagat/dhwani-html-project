<?php
    include 'connection.php';

    $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    $query = "select * from admins";
    $rows = array();
    $result = mysqli_query($mysqli,$query);
    while($addrow = mysqli_fetch_assoc($result)){
        $rows[] = $addrow;
    }
    $json_data = json_encode($rows,JSON_PRETTY_PRINT);

    $json_file = fopen('index.json','w');
    fwrite($json_file,$json_data);