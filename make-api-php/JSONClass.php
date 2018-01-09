<?php
    class JSONClass
    {
        public $query;
        function returnJSONData($query){
            return json_encode($query,JSON_PRETTY_PRINT);
        }
        function writeJSONFile($json_file,$json_data){
            //TODO: Shorten code and return .json file with json data
        }
    }
    