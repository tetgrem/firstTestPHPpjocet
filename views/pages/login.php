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
        <h1 class="h1_l_r">Login page</h1>
        <form method="post" action="/auth/login" novalidate class="needs-validation">
            <div class="mb-3">
                <label for="email" class="form-label">Email address or username</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
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