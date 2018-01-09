<?php
    $str = file_get_contents('index.json');
    $json_data = json_decode($str,true);

    foreach($json_data as $value){
        echo '<br>'.$value['email'];
    }
    echo '<br>'.$value['email'];