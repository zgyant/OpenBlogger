<?php

    print_r( $_REQUEST['email']);
    if(($_POST['email']||$_POST['password'])){
        DatabaseQueries::loginUser($_POST['email'],$_POST['password']);
    }else{
        return("../view/cms/login.php?error=valueno");

}
