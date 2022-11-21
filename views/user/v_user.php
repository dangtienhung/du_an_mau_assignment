<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adara - Modern & Multipurpose eCommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/layout/css/animate.min.css">
    <link rel="stylesheet" href="public/layout/css/magnific-popup.css">
    <link rel="stylesheet" href="public/layout/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="public/layout/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="public/layout/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="public/layout/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="public/layout/css/jquery-ui.min.css">
    <link rel="stylesheet" href="public/layout/css/nice-select.css">
    <link rel="stylesheet" href="public/layout/css/jarallax.css">
    <link rel="stylesheet" href="public/layout/css/flaticon.css">
    <link rel="stylesheet" href="public/layout/css/slick.css">
    <link rel="stylesheet" href="public/layout/css/default.css">
    <link rel="stylesheet" href="public/layout/css/style.css">
    <link rel="stylesheet" href="public/layout/css/login-scss.css">
    <link rel="stylesheet" href="public/layout/css/content-user.css">
    <link rel="stylesheet" href="public/layout/css/responsive.css">
</head>

<body>

    <header class="header">
        <div class="header__logout">
            <a href="">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
            </a>
        </div>
    </header>

    <div class="container-fluid sidebar">
        <div class="sidebar__admin">
            <?php if ($_SESSION['customer_avatar'] != null) {
            ?>
            <img src="admin/public/front-end/images/customer/<?php echo $user->customer_avatar; ?>"
                class="sidebar__admin-avatar">
            <?php } else {
            ?>
            <img src="https://kynguyenlamdep.com/wp-content/uploads/2022/06/anh-gai-xinh-cuc-dep.jpg" alt=""
                class="sidebar__admin-avatar">
            <?php } ?>
            <div class="sidebar__admin-body">
                <h3 style="margin-bottom: 0;"><?php echo $user->customers_name ?></h3>
                <p style="margin-bottom: 0;">Chào mừng bạn đã quay trở lại!</p>
            </div>
        </div>

        <aside class="sidebar__menu">
            <ul class="sidebar__menu-list">
                <li>
                    <a href="" class="sidebar__menu-link">
                        <i class="fa-solid fa-address-card"></i>
                        Thông tin của bạn
                    </a>
                </li>
                <li>
                    <a href="edit-password.php" class="sidebar__menu-link">
                        <i class="fa-solid fa-list-check"></i>
                        Thay đổi mật khẩu
                    </a>
                </li>
            </ul>
        </aside>
    </div>

    <main class="content-wrapper" style="margin-right: 30px;">
        <div class="row m-2">
            <div class="card col-12">
                <div class="row">
                    <div class="col-6">
                        <div class="card-header">
                            <h4 class="mb-0"><?php echo $user->customers_name; ?></h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title mb-5"><?php echo $user->customer_email; ?></h5>
                            <a href="edit-user.php" class="p-3 mt-5 btn btn-danger text-black mt-auto"
                                style="border-radius: 4px; ">Thay đổi thông tin</a>
                        </div>
                    </div>
                    <div class="col-6 text-center">
                        <img src="admin/public/front-end/images/customer/<?= $user->customer_avatar; ?>" alt=""
                            style="width: 80%">
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

<script src="public/layout/js/vendor/jquery-3.5.0.min.js"></script>
<script src="public/layout/js/popper.min.js"></script>
<script src="public/layout/js/bootstrap.min.js"></script>
<script src="public/layout/js/isotope.pkgd.min.js"></script>
<script src="public/layout/js/imagesloaded.pkgd.min.js"></script>
<script src="public/layout/js/jquery.magnific-popup.min.js"></script>
<script src="public/layout/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="public/layout/js/bootstrap-datepicker.min.js"></script>
<script src="public/layout/js/jquery.nice-select.min.js"></script>
<script src="public/layout/js/jquery.countdown.min.js"></script>
<script src="public/layout/js/swiper-bundle.min.js"></script>
<script src="public/layout/js/jarallax.min.js"></script>
<script src="public/layout/js/slick.min.js"></script>
<script src="public/layout/js/wow.min.js"></script>
<script src="public/layout/js/nav-tool.js"></script>
<script src="public/layout/js/plugins.js"></script>
<script src="public/layout/js/main.js"></script>
<script src="public/layout/js/login.js"></script>

</html>