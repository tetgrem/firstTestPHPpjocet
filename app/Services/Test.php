<?php

namespace App\Services;

class Test
{
    public static function getPosts()
    {
        $items = Select::selectAll('works');
        $postlist = [];
        foreach ($items as $el) {
            $postlist[] = $el;
        }
        echo json_encode($postlist);
    }
}