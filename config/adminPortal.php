<?php
global $blogLocation;
$logout = "";
$mainPage = '../view/cms/login.php';
?>
<html>
<head>
    <title>Login</title>
    <?php
    include_once ('Configuration.php');
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
        <a href="logout.php" class="float-right"><?= $logout; ?></a>
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

