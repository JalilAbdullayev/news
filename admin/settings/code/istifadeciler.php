<?php

if (isset($_POST["ist_qeyd"])) {
    $col = "
    AdSoyad=:x,
    email=:email,
    pass=:pass,
    icaze=:icaze,
    sekil=:sekil
    ";
    $arr = [
        'x' => $_POST["AdSoyad"],
        'email' => strtolower($_POST["email"]),
        'pass' => "\$B8A2_" . md5($_POST["sifre"]),
        'icaze' => $_POST["icaze"],
        'sekil' => "img/user.png"
    ];

    $CRUD->Insert("admin", $col, $arr) ? header("Location:istifadeci-siyahi.php?status=ok") :  header("Location:istifadeci-elave.php?status=no");
}

if (isset($_POST["iststatus"])) {
    require_once "../db.php";
    $db = new DBConnection;
    //class
    require_once "../class/crud.php";
    require_once "../class/umumi.php";
    require_once "../class/nizamlamalar.php";
    require_once "../class/haqqinda.php";

    $CRUD = new CRUD;
    $Umumi = new Umumi;
    $Nizam = new Nizamlamalar;
    $Haqqinda = new Haqqinda;

    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id" => $id];
    $st = $CRUD->Select("admin", 0, $where, "status", $arr)["status"];

    $col = "status=:status";
    $array = [
        "status" => $st == 1 ? 0 : 1,
        "id" => $id
    ];
    echo  $CRUD->Update("admin", $col, $where, $array);
    exit;
}

$istifadeciler = $CRUD->Select("admin", 1);
