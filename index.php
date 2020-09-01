<?php
require('config/configuration.php');
require ('database/tableCreator.php');
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

    function get_title()
    {
        return $this->title;
    }

    function get_blog()
    {
        return $this->blog;
    }
}

$index = new Index("OpenBlogger | Open Source Blog CMS", "blog");
?>

<html>
<head>
    <title><?= $index->get_title(); ?></title>
    <?=Configuration::addDependencies();?>
</head>
<body>
<?php
$userTable=TableCreator::createUserTable();
$blogTable=TableCreator::createBlogTable();
$userList=TableCreator::getUser();
if(mysqli_num_rows($userList)<=0)
{

}
?>
</body>
</html>




