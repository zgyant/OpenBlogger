<?php
include ('../database/databaseQueries.php');
if ($_REQUEST['buttType'] === 'login') {
    if (($_REQUEST['username'] || $_REQUEST['password'])) {
        DatabaseQueries::loginUser($_REQUEST['username'], $_REQUEST['password']);
    } else {
        return ("../view/cms/login.php?error=valueno");
    }
}

if ($_REQUEST['buttType'] === 'register') {
    if (($_REQUEST['username'] || $_REQUEST['password']) || $_REQUEST['email'] ||$_REQUEST['fname']) {
        DatabaseQueries::registerUser($_REQUEST['username'], $_REQUEST['password'],$_REQUEST['email'] ,$_REQUEST['fname']);
    } else {
        return ("../view/cms/login.php?error=valueno");
    }
}



