<?php
     /**
     * Generate JSON Class
     * Handles all operations with generating and storing JSON File
     */

    class GenerateJSON{
        
        /**
         * @author Yash Karanke
         * Takes three parameters
         * 1 Database name 
         * 2 Table name
         * 3 output filename
         * the output filename must end with .json
         */

        function createJSON($databaseName,$tableName,$fileName){
            $databaseHost = "localhost";
            $databaseUsername = "root";
            $databasePassword = "";
            //$databaseName = "admission2018";

            $mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);

            $query = "select * from $tableName";
            $result = mysqli_query($mysqli,$query);
            $rows = array(); // To store Data
            while($addrow = mysqli_fetch_assoc($result)){
                $rows[] = $addrow;
            }
            $json_data = json_encode($rows,JSON_PRETTY_PRINT);
            if(file_exists($fileName)){
                return 'File Already Exists';
            }else{
                $json_file = fopen($fileName,'w');
                fwrite($json_file,$json_data);
            }
            return $json_data;
        }
    }
    