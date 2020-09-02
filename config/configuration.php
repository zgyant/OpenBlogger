<?php
/*
This file contains basic configurations.
Edit this to match your server MySQL details.
*/
class Configuration
{
    public static $conn;
     static function getUser()
    {
        $userListSql = "SELECT * FROM `users`";
        $retrieve = mysqli_query(Configuration::$conn, $userListSql);
        return $retrieve;
    }
    static function setConnection()
    {
        $ini_array = parse_ini_file($_SERVER['DOCUMENT_ROOT']."/OpenBlogger/properties.ini");
        if (!Configuration::$conn) {
            // Create connection
            $newConnection = new mysqli($ini_array['hostname'], $ini_array['username'], $ini_array['password']);
           // Check connection
            if (mysqli_connect_errno()) {
                printf("Failed to connect to MySQL: ", mysqli_connect_error());
                exit();
            }
            $createDatabase = "CREATE DATABASE IF NOT EXISTS OpenBlogger";
            $newConnection->query($createDatabase);
            $newConnection->select_db("OpenBlogger");
            Configuration::$conn=$newConnection;
            return Configuration::$conn;
        } else {
            return Configuration::$conn;
        }
    }


    static function getDependencies()
    {
        $dependenciesCollection =
            '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
';
        return $dependenciesCollection;
    }

}

