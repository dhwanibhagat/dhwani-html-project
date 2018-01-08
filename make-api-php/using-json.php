<?php
    $str = file_get_contents('index.json');
    $json_data = json_decode($str,true);

    for($i=0;$i<3;$i++){
    $email = $json_data[$i]['email'].'<br>';
    echo $email;        
    }
