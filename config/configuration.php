<?php
/*
This file contains basic configurations.
Edit this to match your server MySQL details.
*/

class Configuration
{
    public static $conn;
     static function getConnection(){
        if (!isset(self::$conn)) {
            self::$conn = new Configuration();
        }
        return self::$conn;
    }

    static function setConnection($hostname,$username,$password){
        if(!self::$conn){
            //change below to match your server details, leave default if LOCAL MACHINE
            $servername = $hostname; //change this to your server address
            $username = $username; //your mysql username
            $password = $password; //your mysql password

            // Create connection
            self::$conn = new mysqli($servername, $username, $password);

            // Check connection
            if (mysqli_connect_errno()) {
                printf("Failed to connect to MySQL: ", mysqli_connect_error());
                exit();
            }
            $createDatabase = "CREATE DATABASE IF NOT EXISTS OpenBlogger";
            self::$conn->query($createDatabase);
            self::$conn->select_db("OpenBlogger");
        }else{
            echo "connecitonc ha";
        }
    }


    static function getDependencies()
    {
        $dependenciesCollection =
            '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
';
        return $dependenciesCollection;
    }



}

