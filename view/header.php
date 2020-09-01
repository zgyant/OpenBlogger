<?php
$userList=TableCreator::getUser();
if(mysqli_num_rows($userList)<=0)
{
    $index = new Index("Wizard | Open Source Blog CMS", "blog");
    $mainPage='view/cms/initialSetup.php';
}else{
    $index = new Index("OpenBlogger | Open Source Blog CMS", "blog");
    $mainPage='view/cms/login.php';
}
?>
<html>
<head>
    <title><?=$index->title;?></title>
    <?php
        echo Configuration::getDependencies();
    ?>
</head>
<header>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.iconscout.com/icon/free/png-512/php-2038871-1720084.png" width="30" height="30" class="d-inline-block align-top" alt="">
            OpenBlogger
        </a>
    </nav>
</header>
<body>
<div class="container">
    <div class="col" style="margin-top:10%;">
<?php
include($mainPage);
?>
    </div>
</div>
</body>

