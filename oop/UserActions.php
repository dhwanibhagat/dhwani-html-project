<?php
//namespace Practice;
    /**
     * This class contains set of methods which are related to users
     * This contains methods such as 
     * 1 Database connection
     * 2 User Registrations
     * 3 User Login
     */

     class UserActions{
        var $connection = false;

        /**
         * Simple method to connect with the databse
         * This method is simple to connect yet hard to implement
         */
        function databaseConnection($databaseHost,$databaseUsername,$databasePassword,$databaseName){
            try{
                $this->connection = new PDO("mysql:host=$databaseHost;dbname=$databaseName;", $databaseUsername, $databasePassword);
                $this->$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                if($this->connection){
                    return $this->connection;
                }
                else{
                    return false;
                    exit();
                }
            }
            catch(Exception $e){

            }
        }

        /**
         * This function checks if the email and password are correct or not
         * If the credentials are correct it will login the user
         */
        function userLogin($email,$password){
            try{ 
                $result = $this->connection->prepare("SELECT * FROM admins");
                $result->execute();
                $rows = $result->fetch(PDO::FETCH_NUM);
                return $rows;
            }
            catch(Exception $e){
            }
        }

        /**
         * Debug Function
         * This function will return all records in the table
         */
        function debugging(){
            $result = $this->connection->prepare("SELECT * FROM admins");
            $result->execute();
            return $result->fetchAll();
        }
    }