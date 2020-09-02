<?php
include_once ('../config/Configuration.php');
$blogId=$_GET['id'];

?>
<html>
<head>
    <?=Configuration::getDependencies()?>
    <title id="topTitle"></title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }


        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 20%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 80%;
            width: 100%;
            line-height: 1.4;
            text-align: left;
        }




        .notfound .notfound-404 h1>span {
            text-shadow: -8px 0px 0px #fff;
        }

        .notfound h2 {
            font-family: 'Cabin', sans-serif;
            font-size: 20px;
            font-weight: 400;
            text-transform: uppercase;
            color: #000;
            margin-top: 0px;
            margin-bottom: 25px;
        }

        footer{
            font-family: 'Cabin', sans-serif;
            font-size: 10px;
            font-weight: 400;
            text-transform: uppercase;
            color: #000;
            display:flex;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50px;
            width: 100%;
            border-top: 1px solid white;
            justify-content:center;
            align-items:center;
        }

        header{
            font-family: 'Cabin', sans-serif;
            font-size: 20px;
            font-weight: 400;
            color: #000;
            display:flex;
            position: fixed;
            left: 0;
            right: 0;
            height: 50px;
            width: 100%;
            justify-content:left;
            align-items:left;
            margin-left:5%;
            margin-top:2%;
        }
        @media only screen and (max-width: 767px) {
            .notfound .notfound-404 {
                height: 200px;
            }
            .notfound .notfound-404 h1 {
                font-size: 200px;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound .notfound-404 {
                height: 162px;
            }
            .notfound .notfound-404 h1 {
                font-size: 162px;
                height: 150px;
                line-height: 162px;
            }
            .notfound h2 {
                font-size: 16px;
            }
        }
        .logo__cursor {
            display: inline-block;
            width: 10px;
            height: 1rem;
            background: #fe5186;
            margin-left: 5px;
            border-radius: 1px;
            margin-top:0.6%;
        }
        #headTitle{
            margin-top:10%;
            margin-bottom:3%;
            text-align: center;
        }


    </style>
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<header>
    <?php
    $ini_array = parse_ini_file($_SERVER['DOCUMENT_ROOT']."/OpenBlogger/properties.ini");
    ?>
    <a href="<?=$ini_array['homepage'];?>">HOME </a><span class="logo__cursor"></span>
</header>
<body>

<div id="notfound">
    <div class="notfound">
        <h1 id="headTitle"></h1>

        <div id="blogContent"> </div>

    </div>
</div>
</body>
<script type="text/javascript">
    window.onload= function listBlog() {
                $.ajax({
                    type: "GET",
                    url: '../controller/blogController.php',
                    data: {
                        blogId: "<?= $blogId; ?>"
                    },
                    success: function (data) {
                        dataP=JSON.parse(data)
                        $("#headTitle").html(dataP[0][1]);
                        $("#topTitle").html(dataP[0][1]+" | OpenBlogger Free Open Source Blogging CMS");
                        $("#blogContent").html(dataP[0][2]);
                        console.log(data)
                    }
                });
    }
</script>
<style>
    .logo__cursor{
        animation:blink 400ms infinite alternate;
    }
    @keyframes blink {
        from { opacity:1; }
        to { opacity:0; }
    };
</style>
</html>

