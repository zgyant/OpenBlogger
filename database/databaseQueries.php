<?php
class DatabaseQueries extends Configuration {
    static function registerUser($username,$email,$password,$fname){
        $query = "INSERT INTO users (full_name,user_name,password,email) VALUES ($fname,$username,$password,$email)";
        $register=mysqli_query(Configuration::getConnection(),$query);
        return $register;

    }
    static function loginUser($email,$password){
        $password=md5($password);
        $query="SELECT * FROM `users` WHERE email=$email AND password=$password";
        $loginQuery=mysqli_query(Configuration::getConnection(),$query);
        if(mysqli_num_rows($loginQuery)>0)
        {
            $_SESSION['loggedEmail']=md5($email);
            header('Location: ../view/cms/mainContent.php');
            exit;
        }

    }
    static function deleteBlog($id){

    }
    static function update($id,$newData){

    }
    static function selectBlog($numberOfData){

    }


}
