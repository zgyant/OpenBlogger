<?php
require('config/Configuration.php');
require ('database/tableCreator.php');
session_start();
$baseLocation= (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";;
/*
This is the index file for the OpenBlogger. Edit this page to update your blogs homepage.
 */
class Index
{
    public $title;
    function __construct($title)
    {
        global $baseLocation;
        //do not change this
        $this->title = $title;
    }
}
$dbConnection=Configuration::setConnection();
$userTable=TableCreator::createUserTable();
$blogTable=TableCreator::createBlogTable();
include ('view/header.php');
include('view/footer.php');






