<?php
require('config/configuration.php');
require ('database/tableCreator.php');
session_start();
/*
This is the index file for the OpenBlogger. Edit this page to update your blogs homepage.
 */
Configuration::setConnection("localhost","root","");
class Index
{
    public $title;
    public $blog;
    public $blogLocation;

    function __construct($title, $blog_folder)
    {
        //do not change this
        $homepage = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") .
            "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->title = $title;
        $this->blog = $blog_folder;
        $this->blogLocation = $homepage . "/" . $blog_folder;
    }
}

$userTable=TableCreator::createUserTable();
$blogTable=TableCreator::createBlogTable();
include ('view/header.php');
include('view/footer.php');






