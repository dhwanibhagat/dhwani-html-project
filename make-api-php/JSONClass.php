<?php
    class JSONClass
    {
        
        public $query;

        /**
         *  @author Yash Karanke
         *  
         */
        function returnJSONData($query){
            return json_encode($query,JSON_PRETTY_PRINT);
        }

    }
    