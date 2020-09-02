<?php
global $blogLocation;
$userList = Configuration::getUser();
$logout="";
$blogList='';
if (mysqli_num_rows($userList) <= 0) {
    $index = new Index("Wizard | Open Source Blog CMS");
    $mainPage = 'view/cms/initialSetup.php';
} else {
    if (isset($_SESSION['username'])) {
        $logout="Logout";
        $index = new Index("Welcome | Open Source Blog CMS");
        $mainPage='view/cms/addNew.php';
        $blogList = 'view/cms/blogList.php';
    }elseif(!isset($_SESSION['username'])){
        $index = new Index("Read My Blogs | Open Source Blog CMS | OpenBlogger");
        $mainPage = 'view/cms/blogList.php';
    }
}


?>
<html>
<head>
    <title><?= $index->title; ?></title>
    <?php
    echo Configuration::getDependencies();
    ?>
</head>
<header>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://cdn.iconscout.com/icon/free/png-512/php-2038871-1720084.png" width="30" height="30"
                 class="d-inline-block align-top" alt="">
            OpenBlogger
        </a>
        <a href="logout.php" class="float-right"><?=$logout;?></a>
    </nav>
</header>
<body>
<div class="container">
    <div class="col" style="margin-top:10%;">
        <?php
        include($mainPage);
        if(($blogList)!='')
        include($blogList);
        ?>
    </div>
</div>
</body>

