<?php

class Haqqinda
{

    public function Getir()
    {
        global $db;
        $slc = $db->prepare("SELECT * from haqqinda");
        $slc->execute();

        return $slc->fetch(PDO::FETCH_ASSOC);
    }

    public function Redakte($post)
    {

        global $db;
        $k_sekil = $post["k_sekil"];
        $olcu = $_FILES["sekil"]["size"];
        $ad = $_FILES["sekil"]["name"];
        $tip = $_FILES["sekil"]["type"];
        $tmp = $_FILES["sekil"]["tmp_name"];
        $tipler = ["image/png","image/jpeg","image/gif"];
        $dir = "../../sekil/".$ad;

        if ($olcu > 0 && !in_array($tip,$tipler)) {
            return 0;
        }
        $upd = $db->prepare("UPDATE haqqinda set  
        Basliq=:basliq,
        Mezmun=:mezmun,
        img=:img
        ");

        $dys = $upd->execute([
            'basliq' => $post['basliq'],
            'mezmun' => $post['mezmun'],
            'img' => $olcu > 0 ? substr($dir,6) : substr($k_sekil,6)
        ]);

        if ($dys) {
            if ($olcu > 0) {
                unlink($k_sekil);
                move_uploaded_file($tmp, $dir);
            }
            return 1;
        } else {
            return 0;
        }
    }
}
