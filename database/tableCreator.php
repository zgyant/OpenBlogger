<?php

class TableCreator extends Configuration
{
    static function createUserTable()
    {
        global $dbConnection;
        $userTable = "CREATE TABLE IF NOT EXISTS `users` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(30) NOT NULL,
user_name VARCHAR(30) NOT NULL UNIQUE,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";
        $create = mysqli_query($dbConnection, $userTable);
        return $create;
    }

    static function createBlogTable()
    {
        $blogTable = "CREATE TABLE IF NOT EXISTS `blog` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
blog_title VARCHAR(30) NOT NULL,
blog_material LONGTEXT NOT NULL,
`post_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";

        $create = mysqli_query(Configuration::$conn, $blogTable);
        return $create;
    }


}