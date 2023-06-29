<?php

use App\Services\Router;
use App\Services\Select;
use App\Controllers\Auth;
use App\Controllers\AddPost;
use App\Controllers\EditPost;

$item = Select::selectRow('link', 'works');

foreach ($item as $el) {
    Router::page('/' . $el['link'], 'viewpost');
}


Router::page('/', 'index');
Router::page('/index', 'index');
Router::page('/blog', 'blog');
Router::page('/register', 'register');
Router::page('/login', 'login');
Router::page('/profile', 'profile');
Router::page('/admin', 'admin');
Router::page('/test', 'test');
Router::page('/admin/addPost', 'addPost');
Router::page('/admin/editPost', 'editPost');

Router::post('/auth/register', Auth::class, 'register', true, true);
Router::post('/auth/login', Auth::class, 'login', true);
Router::post('/auth/logout', Auth::class, 'logout');

Router::post('/addPost', AddPost::class, 'addPost', true);
Router::post('/editPost', EditPost::class, 'editPost', true);



Router::enable();