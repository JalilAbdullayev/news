<?php

class Nizamlamalar
{

    public function Getir()
    {
        global $db;

        $slc = $db->prepare("SELECT * from nizamlamalar");
        $slc->execute();

        return $slc->fetch(PDO::FETCH_ASSOC);
    }

    public function Redakte($post)
    {
        global $db;

        if ($post["nizam"] == "umumi") {


            $olcu = $_FILES["robots"]["size"];
            $tip = $_FILES["robots"]["type"];
            $tmp = $_FILES["robots"]["tmp_name"];

            $dir = "../../robots.txt";
            if ($olcu > 0 && $tip != "text/plain") {
                return 0;
            }

            $upd = $db->prepare("UPDATE nizamlamalar set 
            Basliq=:basliq,
            Aciqlama=:aciqlama,
            robots=:robots,
            AcarSozler=:soz
            ");
            $dys = $upd->execute([
                'basliq' => $post["basliq"],
                'aciqlama' => $post["aciqlama"],
                'robots' => "robots.txt",
                'soz' => $post["keywords"]
            ]);

            if ($dys) {
                if ($olcu > 0) {
                    unlink($dir);
                    move_uploaded_file($tmp, $dir);
                }
                return 1;
            } else {
                return 0;
            }
        }

        if ($post["nizam"] == "elaqe") {
            $upd = $db->prepare("UPDATE nizamlamalar set 
            tel=:tel,
            email=:email,
            fb=:fb,
            ins=:ins,
            link=:link,
            tw=:tw
            ");
            $dys = $upd->execute([
                'tel' => $post["tel"],
                'email' => $post["email"],
                'fb' => $post["fb"],
                'ins' => $post["ins"],
                'link' => $post["link"],
                'tw' => $post["tw"]
            ]);
            return $dys ? 1 : 0;
        }
    }
}
