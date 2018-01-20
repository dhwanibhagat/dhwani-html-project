<?php
    
    include 'generate-json.php';

    $JSONObject = new GenerateJSON();
    
    echo $JSONObject->createJSON('admission2018','courses','courses.json');
