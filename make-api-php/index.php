<?php
    include 'connection.php';
    include 'JSONClass.php';

    $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);
    $query = "select * from admins";
    $rows = array();
    $result = mysqli_query($mysqli,$query);
    while($addrow = mysqli_fetch_assoc($result)){
        $rows[] = $addrow;
    }
    $JSONNotationObject = new JSONClass;
    echo  $JSONNotationObject->returnJSONData($rows);


//    $json_file = fopen('index.json','w');
//    fwrite($json_file,$json_data);

//    echo $json_data;