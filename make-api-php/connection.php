<?php
    $email="";
    $databaseHost = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $databaseName = "admission2018";
    /*
    $conn = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare( "SELECT `email` FROM `student_data` WHERE `email` = ?" );			
    $query->bindValue(1, $email );
    $query->execute();
    */