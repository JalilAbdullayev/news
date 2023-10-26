<?php
session_start();
ob_start();
date_default_timezone_set("Asia/Baku");
require_once "../settings/db.php";
$db = new DBConnection;
//class
require_once "../settings/class/umumi.php";
require_once "../settings/class/nizamlamalar.php";
require_once "../settings/class/haqqinda.php";
require_once "../settings/class/blog.php";
require_once "../settings/class/crud.php";
require_once "../settings/class/login.php";


$CRUD = new CRUD;
$Umumi = new Umumi;
$login = new Login;
$Nizam = new Nizamlamalar;
$Haqqinda = new Haqqinda;
$Blog = new Blog;
//code

if($Umumi->CariSehifeAdi() !== "index") {
    $Umumi->REFERER();
}

if(!$login->CheckSession($_SESSION["user_email"]) || empty($_SESSION["user_email"])) {
    header("Location:logout.php");
}