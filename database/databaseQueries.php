<?php
require('../config/configuration.php');
session_start();
class DatabaseQueries extends Configuration
{
    static function registerUser($username,$password, $email, $fname)
    {
        $password=md5($password);
        $query = "INSERT INTO users (full_name,user_name,password,email) VALUES ('$fname','$username','$password','$email')";
        $register = mysqli_query(Configuration::setConnection(), $query);
        return $register;
    }

    static function loginUser($username, $password)
    {
        $password=md5($password);
        $query = "SELECT * FROM `users` WHERE `user_name`='$username' AND `password`='$password'";
        $loginQuery = mysqli_query(Configuration::setConnection(), $query);
        $rows = mysqli_num_rows($loginQuery);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            return $rows;
        }

    }

    static function deleteBlog($id)
    {

    }

    static function update($id, $newData)
    {

    }

    static function selectBlog($numberOfData)
    {

    }


}
