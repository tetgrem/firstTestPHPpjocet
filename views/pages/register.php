<?php

if ($_SESSION['user']) {
    \App\Services\Router::redirect('/profile');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <?php
    require_once 'views/components/header.php'
    ?>

</head>

<body class="main__body">
<!-- Header -->
<header>
    <!-- Navbar -->
    <nav>
        <?php
        require_once 'views/components/nav.php';
        ?>
    </nav>
</header>


<!-- Main Page -->
<main>
    <div class="container">
        <h1 class="h1_l_r">Register Page</h1>
        <form method="post" class="needs-validation" action="/auth/register" novalidate enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите e-mail.
                </div>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" required>
                <div class="invalid-feedback">
                    Пожалуйста, выберите имя пользователя.
                </div>
            </div>
            <div class="mb-3">
                <label for="full_name" class="form-label">Full Name</label>
                <input type="text" name="full_name" class="form-control" id="full_name" required>
                <div class="invalid-feedback">
                    Пожалуйста, укажите полное имя.
                </div>
            </div>
            <div class="mb-3">
                <label for="avatar" class="form-label">User Avatar</label>
                <input type="file" name="avatar" class="form-control" id="avatar">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="Password" required>
                <div class="invalid-feedback">
                    Пожалуйста, укажите пароль.
                </div>
            </div>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Password Confirmation</label>
                <input type="password" name="password_confirm" class="form-control" id="password_confirm" required>
                <div class="invalid-feedback">
                    Пожалуйста, повторите пароль.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</main>

<!-- Footer -->
<footer>
    <?php require_once 'views/components/footer.php'?>
</footer>

</body>

<?php
require_once 'views/components/js_includes.php';
?>

</html>