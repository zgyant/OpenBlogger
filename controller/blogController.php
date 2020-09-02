<?php
require('../config/Configuration.php');
session_start();
$id=$_REQUEST['blogId'];
$query = "SELECT * FROM `blog` WHERE `id`='$id'";
$listQuery = mysqli_query(Configuration::setConnection(), $query);
$rows = mysqli_num_rows($listQuery);
$data=mysqli_fetch_all($listQuery);
echo json_encode ($data);