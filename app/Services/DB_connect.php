<?php

namespace App\Services;

class DB_connect
{
    public static function dbCon()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'blog');

        if (!$connect) {
            die('Error connect to database');
        }

        return $connect;
    }
}