<?php
    $str = file_get_contents('courses.json');
    $json_data = json_decode($str,true);

    for ($i=0; $i < 3; $i++) {
        if ($json_data[$i]['isActive']!=0 && $json_data[$i]['isActive']!=null) {
            echo '<br>'. $json_data[$i]['ID'] .' '.$json_data[$i]['coursename'];
        }
        elseif ($json_data[$i]['isActive']==0 && $json_data[$i]['isActive']==null) {
            echo '<br>'.$json_data[$i]['ID'].' This course is not yet active';
        }
    }