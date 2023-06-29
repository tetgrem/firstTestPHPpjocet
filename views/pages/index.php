<?php

if (!$_SESSION['user']) {
    \App\Services\Router::redirect('/login');
}

use App\Services\Select;

$items = Select::selectAll('works');
?>

<pre>

</pre>
<!DOCTYPE html>
<html lang="en">

<head>
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
<section class="header__section">
    <div class="container">
        <div class="header__row">
            <div class="header__text">
                <h1>Hi, I am John,<br> Creative Technologist</h1>
                <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                <a href="#">Download Resume</a>
            </div>
            <div class="header__img">
                <img src="img/header__img.png" alt="header-img">
            </div>
        </div>
    </div>
</section>
<section class="posts__section">
    <div class="container">
        <div class="posts__row-top">
            <span>Recent posts</span>
            <a href="/blog">View all</a>
        </div>
        <div class="posts__row">
            <div class="posts__item">
                <a href="#">
                    <h2>Making a design system from scratch</h2>
                    <span class="posts__date">12 Feb 2020</span>
                    <span>|</span>
                    <span class="posts__theme">Design, Pattern</span>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </a>
            </div>
            <div class="posts__item">
                <a href="#">
                    <h2>Creating pixel perfect icons in Figma</h2>
                    <span class="posts__date">12 Feb 2020</span>
                    <span>|</span>
                    <span class="posts__theme">Figma, Icon Design</span>
                    <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="featuredworks__section">
    <div class="container">
        <div class="featuredworks__header">
            <h2>Featured works</h2>
        </div>
        <div class="featuredworks__content">


            <?php

            foreach ($items as $item) { ?>
                <div class="featuredworks__item">
                    <div class="item__img">
                        <a href="/<?=$item['link']?>"><img src="<?=$item['img']?>" alt="image"></a>
                    </div>
                    <div class="item__content">
                        <h2><a href="/<?=$item['link']?>"><?=$item['title']?></a></h2>
                        <div class="item__info">
                            <span><?=$item['year']?></span>
                            <span><?=$item['category']?></span>
                        </div>
                        <p><?=$item['description_mini']?></p>
                    </div>
                </div>
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