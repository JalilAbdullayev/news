<?php

$data = $Nizam->Getir();


if(isset($_POST["umumi"])){
    $Nizam->Redakte($_POST) ? header("Location:nizam-umumi.php?status=ok") : header("Location:nizam-umumi.php?status=no");
}

if(isset($_POST["elaqe"])){
    $Nizam->Redakte($_POST) ? header("Location:nizam-elaqe.php?status=ok") : header("Location:nizam-elaqe.php?status=no");
}