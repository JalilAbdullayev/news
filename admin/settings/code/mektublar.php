<?php

if(@$_GET["delmktb"] == "ok") {
    $CRUD->Delete("contactus", @$_GET["id"]) ? header("Location:mektub-siyahi.php?status=ok") : header("Location:mektub-siyahi.php?status=no");
}

if(@$_GET["bax"] == "ok") {
    $bax = $CRUD->Select("contactus", 0, "where id=" . @$_GET["id"]);
    if(empty($bax)) {
        header("Location:mektub-siyahi.php?status=no");
        exit;
    }
}

$mdata = $CRUD->Select("contactus", 1);
