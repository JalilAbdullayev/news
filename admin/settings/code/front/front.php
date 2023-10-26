<?php
ob_start();
date_default_timezone_set("Asia/Baku");
require_once "admin/settings/db.php";
$db = new DBConnection;
//class
require_once "admin/settings/class/crud.php";
require_once "admin/settings/class/umumi.php";
require_once "admin/settings/class/nizamlamalar.php";
require_once "admin/settings/class/haqqinda.php";
require_once "admin/settings/class/blog.php";

$CRUD = new CRUD;
$Umumi = new Umumi;
$Nizam = new Nizamlamalar;
$Haqqinda = new Haqqinda;
$Blog = new Blog;
//code

if($Umumi->CariSehifeAdi() !== "index") {
    $Umumi->REFERER();
}

$Title = $Umumi->DinamikBasliq();

$Nizam = $CRUD->Select("nizamlamalar");

$BlogCat = $CRUD->Select("blog_kat", 1, "where status=:st", "*", ["st" => 1]);

$SonUcBlog = $CRUD->Select("blog", 1, "where status=:st", "*", ["st" => 1]);
rsort($SonUcBlog);
$mostRead = $CRUD->Select("blog", 1, "where status=:st order by views desc limit 4", "*", ["st" => 1]);
if(@$_GET["blog_category_id"] != null || @$_GET["blog_category_id"] != "") {
    $BlogCategory = $CRUD->Select("blog", 1, "where kat_id=:id and status=:st", "*", ["id" => @$_GET["blog_category_id"], "st" => 1]);
    $mostCatRead = $CRUD->Select("blog", 1, "where kat_id=:id and status=:st order by views desc limit 3", "*", ["id" => @$_GET["blog_category_id"], "st" => 1]);
    $last3CatNews = $CRUD->Select("blog", 1, "where kat_id=:id and status=:st limit 3", "*", ["id" => @$_GET["blog_category_id"], "st" => 1]);
    rsort($BlogCategory);
    if(empty($BlogCategory)) {
        header("Location:index");
        exit;
    }
}

if(@$_GET["blog_kod"] != null || @$_GET["blog_kod"] != "") {
    $Blog = $CRUD->Select("blog", 0, "where id=:id and status=:st", "*", ["id" => @$_GET["blog_kod"], "st" => 1]);
    $kat_ad = $CRUD->Select("blog_kat", 0, "where id=:id", "*", ['id' => $Blog['kat_id']])["Ad"];
    $kat_slug = $CRUD->Select("blog_kat", 0, "where id=:id", "*", ['id' => $Blog['kat_id']])["slug"];
    $arr = ["[", "]", "\""];
    $tags = str_replace($arr, "", $Blog["tags"]);
    $updateViewCount = "UPDATE blog SET views = views + 1 WHERE id = {$Blog["id"]}";
    $db->query($updateViewCount);
    $morePosts = $CRUD->Select("blog", 1, "where status=:st and id!=:id and kat_id=:kat limit 4", "*", ["st" => 1, "id" => $Blog["id"], "kat" => $Blog["kat_id"]]);
    rsort($morePosts);
    if(empty($Blog)) {
        header("Location:index");
        exit;
    }
}
