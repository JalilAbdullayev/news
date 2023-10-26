<?php

$data = $Haqqinda->Getir();


if(isset($_POST["haqqinda"])){
    $Haqqinda->Redakte($_POST) ? header("Location:haqqinda.php?status=ok") : header("Location:haqqinda.php?status=no");
}
