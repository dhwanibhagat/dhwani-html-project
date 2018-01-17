<?php
    class JSONClass
    {
        public $query;
        function returnJSONData($query){
            return json_encode($query,JSON_PRETTY_PRINT);
        }

    }
    