<?php

if (!($_SESSION['user'] && $_SESSION['user']['user_group'] == 2   )) {
    \App\Services\Router::redirect('/profile');
}

use App\Services\Select;

$link = $_SESSION['link'];

$item = Select::selectOnePost('works', $link, 'link')

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
        <h1 class="h1_l_r">EditPost page</h1>
        <?php foreach ($item as $el) { ?>
        <form method="post" class="needs-validation" action="/editPost" novalidate enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" value="<?=$el['title']?>" class="form-control" id="title" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите e-mail.
                </div>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" name="year" value="<?=$el['year']?>" class="form-control" id="year" required>
                <div class="invalid-feedback">
                    Пожалуйста, выберите имя пользователя.
                </div>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" name="category" value="<?=$el['category']?>" class="form-control" id="category" required>
                <div class="invalid-feedback">
                    Пожалуйста, укажите полное имя.
                </div>
            </div>
            <div class="mb-3">
                <label for="description_mini" class="form-label">description_mini</label>
                <input type="text" name="description_mini" value="<?=$el['description_mini']?>" class="form-control" id="description_mini" required>
                <div class="invalid-feedback">
                    Пожалуйста, укажите пароль.
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <textarea name="description" class="form-control"  id="description" required><?=$el['descriprion']?></textarea>
                <div class="invalid-feedback">
                    Пожалуйста, укажите пароль.
                </div>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">img</label>
                <input type="text" name="img" class="form-control" value="<?=$el['img']?>" id="img" required>
                <div class="invalid-feedback">
                    Пожалуйста, укажите пароль.
                </div>
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">link</label>
                <input type="text" name="link" value="<?=$el['link']?>" class="form-control" id="link" required>
                <div class="invalid-feedback">
                    Пожалуйста, укажите пароль.
                </div>
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">EDDIT</button>
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