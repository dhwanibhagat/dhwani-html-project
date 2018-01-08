<?php
    include 'connection.php';

    $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    $query = "select * from admins";
    $result = mysqli_query($mysqli,$query);
    while($addrow = mysqli_fetch_array($result)){
        echo json_encode($addrow,JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }