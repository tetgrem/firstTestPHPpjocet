<?php

if (!($_SESSION['user'] && $_SESSION['user']['user_group'] == 2   )) {
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
        <h1 class="h1_l_r">Admin page</h1>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="/admin/addPost">Добавить пост</a>
            </li>

        </ul>
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