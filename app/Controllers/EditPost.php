<?php

namespace App\Controllers;

use App\Services\DB_connect;
use App\Services\Router;

class EditPost
{

    public function editPost($data)
    {
        $title = $data['title'];
        $year = $data['year'];
        $category = $data['category'];
        $description_mini = $data['description_mini'];
        $description = $data['description'];
        $img = $data['img'];
        $link = $data['link'];

        $id = mysqli_query(DB_connect::dbCon(), "SELECT `id` FROM `works` WHERE `link`='$link'");
        $id = mysqli_fetch_assoc($id);
        $id = $id['id'];




        mysqli_query(DB_connect::dbCon(), "UPDATE `works` SET `title`='$title',`year`='$year',`category`='$category',`description_mini`='$description_mini',`descriprion`='$description',`img`='$img',`link`='$link' WHERE `works`.`id` = '$id'");
        unset($_SESSION['link']);
        Router::redirect('/' . $link);
    }
}