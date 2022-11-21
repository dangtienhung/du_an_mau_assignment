<?php @session_start(); ?>
<!-- header -->
<header class="header">
    <div class="header__logout">
        <a href="logout.php?func=exit">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
        </a>
    </div>
</header>

<!-- aside -->
<div class="container-fluid sidebar">
    <!-- admin -->
    <div class="sidebar__admin">
        <?php if ($_SESSION['admin_avatar'] != null) { ?>
        <img src="public/front-end/images/<?= $_SESSION['admin_avatar'] ?>" alt="" class="sidebar__admin-avatar">
        <?php } else { ?>
        <img src="https://vnn-imgs-a1.vgcloud.vn/image1.ictnews.vn/_Files/2020/03/17/trend-avatar-1.jpg" alt=""
            class="sidebar__admin-avatar">
        <?php } ?>
        <div class="sidebar__admin-body">
            <h3><?= $_SESSION['admin_usename'] ?></h3>
            <p>Chào mừng bạn đã quay trở lại!</p>
        </div>
    </div>

    <!-- content -->
    <aside class="sidebar__menu">
        <ul class="sidebar__menu-list">
            <li>
                <a href="home.php" class="sidebar__menu-link">
                    <i class="fa-brands fa-microsoft"></i>
                    Bảng điều khiển
                </a>
            </li>
            <li>
                <a href="product-categories.php" class="sidebar__menu-link">
                    <i class="fa-solid fa-list"></i>
                    Quản lý các loại sản phẩm
                </a>
            </li>
            <li>
                <a href="products.php" class="sidebar__menu-link">
                    <i class="fa-solid fa-list-check"></i>
                    Quản lý sản phẩm
                </a>
            </li>
            <li>
                <a href="customers.php" class="sidebar__menu-link">
                    <i class="fa-solid fa-address-card"></i>
                    Quản lý user
                </a>
            </li>
            <li>
                <a href="comments.php" class="sidebar__menu-link">
                    <i class="fa-solid fa-comments-dollar"></i>
                    Quản lý bình luận
                </a>
            </li>
        </ul>
    </aside>
</div>