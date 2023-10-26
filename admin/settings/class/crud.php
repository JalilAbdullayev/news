<?php


class CRUD
{


    public function Select($table, $multi = 0, $where = null, $column = "*", $arr = null)
    {
        global $db;
        $slc = $db->prepare("SELECT {$column} from {$table} {$where}");
        $slc->execute($arr);
        return $multi ? $slc->fetchAll(PDO::FETCH_ASSOC) : $slc->fetch(PDO::FETCH_ASSOC);
    }

    public function Insert($table, $columns, $arr)
    {
        global $db;
        $ins = $db->prepare("INSERT into {$table} set {$columns}");
        return $ins->execute($arr) ? 1 : 0;
    }

    public function Update($table, $columns = null, $where = null, $arr = null)
    {
        global $db;
        $upt = $db->prepare("UPDATE {$table} set {$columns} {$where}");
        return $upt->execute($arr) ? 1 : 0;
    }

    public function Delete($table, $con)
    {
        global $db;
        $dlt = $db->prepare("DELETE from {$table} where id={$con}");
        return $dlt->execute() ? 1 : 0;
    }
}
