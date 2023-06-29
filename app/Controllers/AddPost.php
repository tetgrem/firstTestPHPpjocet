<?php

namespace App\Controllers;

use App\Services\DB_connect;
use App\Services\Router;

class AddPost
{

    public function addPost($data)
    {
        $title = $data['title'];
        $year = $data['year'];
        $category = $data['category'];
        $description_mini = $data['description_mini'];
        $description = $data['description'];
        $img = $data['img'];
        $link = $data['link'];

        mysqli_query(DB_connect::dbCon(), "INSERT INTO `works`(`id`, `title`, `year`, `category`, `description_mini`, `descriprion`, `img`, `link`) VALUES (NULL,'$title','$year','$category','$description_mini','$description','$img','$link')");

        Router::redirect('/');
    }
}