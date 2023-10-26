<?php



class Login
{


    public function UserEnter($email, $pass)
    {
        global $db;
        global $CRUD;

        if (!$this->CheckEmail($email)) {
            return 0;
        }

        $email = strtolower($email);
        $this->Check($email);
        $pass = "\$B8A2_" . md5($pass);
        $arr = [
            'email' => $email,
            'pass' => $pass,
            'st' => 1
        ];
        $login = $CRUD->Select("admin", 0, "where email=:email and pass=:pass and status=:st", "*", $arr);
        if (!empty($login)) {
            $CRUD->Update("admin","tarix=:tarix","where id=:id",["tarix"=>date("Y-m-d H:i:s"),"id"=>$login["id"]]);
            $_SESSION["user_email"] = $email;
            $_SESSION["user_AdSoyad"] = $login["AdSoyad"];
            $_SESSION["user_icaze"] = $login["icaze"];
            $_SESSION["user_sekil"] = $login["sekil"];
            return 1;
        } else {
            return 0;
        }
    }


    public function Check($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function CheckEmail($data)
    {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            return 0;
        }
        return 1;
    }

    public function CheckSession($post)
    {
        global $CRUD;
        return $CRUD->Select("admin",0,'where email=:mail and status=:st',"*",['mail'=>$post,'st'=>1]) ? 1 : 0;
    }
}
