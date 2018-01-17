<?php
    $str = file_get_contents('index.json');
    $json_data = json_decode($str,true);

    for ($i=0; $i < 4; $i++) {
        if ($json_data[$i]['isActive']!=0 && $json_data[$i]['isActive']!=null) {
            echo '<br>'. $json_data[$i]['id'] .' '.$json_data[$i]['name'];
        }
        elseif ($json_data[$i]['isActive']==0 && $json_data[$i]['isActive']!=null) {
            echo '<br>'.$json_data[$i]['id'].' Your Account is not yet active';
        }
    }