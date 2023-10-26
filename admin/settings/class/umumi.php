<?php


class Umumi
{

    public function CariSehifeAdi()
    {
        return basename($_SERVER['PHP_SELF'], ".php");
    }

    public function REFERER()
    {
        if($_SERVER["HTTP_REFERER"] === "" || $_SERVER["HTTP_REFERER"] === null) {
            header("Location:index.php");
        }
    }

    public function DinamikBasliq()
    {
        global $CRUD;
        $title = $CRUD->Select("nizamlamalar")["Basliq"];
        $desc = $CRUD->Select("nizamlamalar")["Aciqlama"];
        $keys = $CRUD->Select("nizamlamalar")["AcarSozler"];
        $domain = $_SERVER["HTTP_HOST"];
        $img = $domain . "/images/logo-dark.png";
        $PageName = $this->CariSehifeAdi();
        $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $arr = [];
        switch($PageName) {
            case "index":
                array_push($arr, $title, $desc, $keys, $domain, $img, $actual_link);
                return $arr;
            case "about":
                $title = "Haqqında";
                $desc = strip_tags(mb_substr($CRUD->Select("haqqinda")["Mezmun"], 0, 220) . "...");
                $img = $domain . $CRUD->Select("haqqinda")["img"];
                array_push($arr, $title, $desc, $keys, $domain, $img, $actual_link);
                return $arr;
            case "contact":
                $title = "Əlaqə";
                $desc = "Əlaqə nömrəsi: " . $CRUD->Select("nizamlamalar")["tel"] . " Email: " . $CRUD->Select("nizamlamalar")["email"] . " Ünvan: " . $CRUD->Select("nizamlamalar")["unvan"];
                array_push($arr, $title, $desc, $keys, $domain, $img, $actual_link);
                return $arr;
            case "news-category":
                $title = "Category";
                array_push($arr, $title, $desc, $keys, $domain, $img, $actual_link);
                return $arr;
            case "news-details":
                $title = "Xəbər";
                array_push($arr, $title, $desc, $keys, $domain, $img, $actual_link);
                return $arr;
            case "news":
                $title = "Xəbərlər";
                array_push($arr, $title, $desc, $keys, $domain, $img, $actual_link);
                return $arr;
        }
    }

    public function seo($str, $options = array())
    {
        $str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());
        $defaults = array(
            'delimiter' => '-',
            'limit' => null,
            'lowercase' => true,
            'replacements' => array(),
            'transliterate' => true
        );
        $options = array_merge($defaults, $options);
        $char_map = array(

            // Latin symbols
            '©' => '(c)',

            // AZ
            'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G', 'Ə' => 'E',
            'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g', 'ə' => 'e',
        );
        $str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);
        if($options['transliterate']) {
            $str = str_replace(array_keys($char_map), $char_map, $str);
        }
        $str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);
        $str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);
        $str = mb_substr($str, 0, ($options['limit'] ?: mb_strlen($str, 'UTF-8')), 'UTF-8');
        $str = trim($str, $options['delimiter']);
        return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
    }
}
