<?php



$link = $_GET['q'];

$_SESSION['link'] = $_GET['q'];

use App\Services\Select;

$item = Select::selectOnePost('works', $link, 'link');

?>
<html lang="en">

<head>
    <?php
    require_once 'views/components/header.php';
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


<section class="featuredworks__section">
    <div class="container">
        <div class="featuredworks__header">
            <h2>Вы смотрите пост под номером: <?php foreach ($item as $el) {
                print_r($el['id']);
            }?></h2>
        </div>
        <div class="featuredworks__content">


            <?php

            foreach ($item as $el) { ?>
                <div class="featuredworks__item">
                    <div class="item__img">
                        <img src="<?=$el['img']?>" alt="image">
                    </div>
                    <div class="item__content">
                        <h2><?=$el['title']?></h2>
                        <div class="item__info">
                            <span><?=$el['year']?></span>
                            <span><?=$el['category']?></span>
                        </div>
                        <p><?=$el['descriprion']?></p>
                    </div>
                </div>
                <?php if ($_SESSION['user']['user_group'] == 2) { ?>
                    <a href="/admin/editPost">Редактировать</a>
                    <span> / </span>
                    <a href="#">Удалить</a>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
</section>

<!-- Main Page -->
<main></main>

<!-- Footer -->
<footer>
    <?php require_once 'views/components/footer.php'?>
</footer>

</body>

<?php
require_once 'views/components/js_includes.php';
?>

</html>

