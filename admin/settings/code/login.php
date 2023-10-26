<?php
session_start();
ob_start();
date_default_timezone_set("Asia/Baku");
require_once "../settings/db.php";
$db = new DBConnection;
//class
require_once "../settings/class/crud.php";
require_once "../settings/class/umumi.php";
require_once "../settings/class/login.php";


$CRUD = new CRUD;
$Umumi = new Umumi;
$login = new Login;

 if(isset($_POST["enter"])){
    $login->UserEnter($_POST["email"],$_POST["pass"]) ? header("Location:index.php?status=welcome") : header("Location:login.php?status=err");
 }