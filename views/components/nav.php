<div class="navbar">
    <ul class="menu">
        <li class="menu__item"><a href="/" class="menu__item-link menu__item-link-active" data-scroll>Home</a></li>
        <li class="menu__item"><a href="/blog" class="menu__item-link" data-scroll>Blog</a></li>
        <?php
        if (!$_SESSION['user']) {
            ?>
            <li class="menu__item reglog"><a href="/login" class="menu__item-link" style="color: darkslateblue" data-scroll>Login</a></li>
            <li class="menu__item reglog"><a href="/register" class="menu__item-link" style="color: darkslateblue" data-scroll>Registration</a></li>
            <?php
        } else {
            ?>
            <li class="menu__item reglog"><a href="/profile" class="menu__item-link" style="color: darkslateblue" data-scroll>Profile</a></li>
            <form action="/auth/logout" method="post" class="reglog">
                <button type="submit" class="menu__item menu__item-link" style="color: darkslateblue; background-color: transparent; margin-top: -2px;">Logout</button>
            </form>

            <?php
        }
        ?>
    </ul>
    <ul class="menu">
        <?php
            if (!$_SESSION['user']) {
                ?>
                <li class="menu__item"><a href="/login" class="menu__item-link" style="color: darkslateblue" data-scroll>Login</a></li>
                <li class="menu__item"><a href="/register" class="menu__item-link" style="color: darkslateblue" data-scroll>Registration</a></li>
        <?php
            } else {
                ?>
                <li class="menu__item"><a href="/profile" class="menu__item-link" style="color: darkslateblue" data-scroll>Profile</a></li>
                <form action="/auth/logout" method="post">
                    <button type="submit" class="menu__item menu__item-link" style="color: darkslateblue; background-color: transparent; margin-top: -2px;">Logout</button>
                </form>

        <?php
            }
        ?>

    </ul>
    <div class="burger">
        <span></span>
    </div>
</div>