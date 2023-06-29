<?php

namespace App\Controllers;

use App\Services\Router;
use App\Services\DB_connect;
use App\Services\Select;

class Auth
{

    public function login($data)
    {
        $user_data = $data['email'];
        $password = $data['password'];


        $user = Select::selectOneUser($user_data);
        $user = mysqli_fetch_assoc($user);



        if (!$user) {
            die('Пользователь не найден!');
        }


        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "full_name" => $user['full_name'],
                "username" => $user['username'],
                "user_group" => $user['user_group'],
                "email" => $user['email'],
                "avatar" => $user['avatar'],
            ];
            Router::redirect('/profile');
        } else {
          die('Неверный e-mail и/или пароль');
        }

    }


    public function register($data, $files)
    {

        $email = $data['email'];
        $username = $data['username'];
        $full_name = $data['full_name'];
        $password = $data['password'];
        $password_confirm = $data['password_confirm'];

        if ($password !== $password_confirm) {
            print_r('Пароли не совпадают');
            die();
        }

        $avatar = $files['avatar'];
        $fileName = time() . '_' . $avatar['name'];
        $path = "uploads/avatars/" . $fileName;
        $db_path = '/' . $path;

        $hash_pass = password_hash($password, PASSWORD_DEFAULT);

        $checkuser = mysqli_query(DB_connect::dbCon(), "SELECT email FROM `users` WHERE email='$email'");
        if (mysqli_fetch_array($checkuser) > 0) {
            print_r('Такой email уже занят');
            die();
        }
        $checkuser = mysqli_query(DB_connect::dbCon(), "SELECT username FROM `users` WHERE username='$username'");
        if (mysqli_fetch_array($checkuser) > 0) {
            print_r('Такой username уже занят!');
            die();
        }
        move_uploaded_file($avatar["tmp_name"], $path);

        if (!$files['avatar']['name'] == '') {
            mysqli_query(DB_connect::dbCon(), "INSERT INTO `users` (`id`, `username`, `email`, `full_name`, `password`, `avatar`, `user_group`) VALUES (NULL, '$username', '$email', '$full_name', '$hash_pass','$db_path', 1)");
        } else {
            mysqli_query(DB_connect::dbCon(), "INSERT INTO `users` (`id`, `username`, `email`, `full_name`, `password`, `avatar`, `user_group`) VALUES (NULL, '$username', '$email', '$full_name', '$hash_pass', NULL, 1)");
        }
        Router::redirect('/login');
    }

    public function logout()
    {
        unset($_SESSION['user']);
        Router::redirect('/login');
    }
}