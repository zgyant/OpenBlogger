<?php

class TableCreator extends Configuration
{
    static function createUserTable()
    {
        $userTable = "CREATE TABLE IF NOT EXISTS `users` (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
full_name VARCHAR(30) NOT NULL,
user_name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL
)";
        $create = mysqli_query(Configuration::getConnection(), $userTable);
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

        $create = mysqli_query(Configuration::getConnection(), $blogTable);
        return $create;
    }

    static function getUser(){
        $userListSql="SELECT * FROM `users`";
        $retrieve=mysqli_query(Configuration::getConnection(),$userListSql);
        return $retrieve;
    }

}