<?php
    include 'connection.php';

    $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    $query = "select * from admins";
    $rows = array();
    $result = mysqli_query($mysqli,$query);
    while($addrow = mysqli_fetch_assoc($result)){
        $rows[] = $addrow;
    }
    print json_encode($rows,JSON_PRETTY_PRINT);