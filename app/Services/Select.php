<?php

namespace App\Services;

class Select
{

    public static function selectAll($name)
    {
        return mysqli_query(DB_connect::dbCon(), "SELECT * FROM `$name`");
    }

    public static function selectOnePost($name, $link, $row)
    {
        return  mysqli_query(DB_connect::dbCon(), "SELECT * FROM `$name` WHERE $row='$link'");
    }

    public static function selectRow($row, $name)
    {
        return  mysqli_query(DB_connect::dbCon(), "SELECT $row FROM `$name`");
    }

    public static function selectOneUser($user_data)
    {
        return mysqli_query(DB_connect::dbCon(), "SELECT * FROM `users` WHERE email='$user_data' OR username='$user_data'");
    }

}

