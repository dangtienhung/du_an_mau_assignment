<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Adara - Modern & Multipurpose eCommerce Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- CSS here -->
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
    <link rel="stylesheet" href="public/layout/css/responsive.css">
</head>

<body>

    <?php
    if (isset($_GET['error'])) {
        echo "<script>Bạn chưa nhập đầy đủ!</script>";
    }
    ?>

    <div class="position-fixed" style="top: 16px; right: 16px; cursor: pointer;">
        <a href="index.php" style="padding: 8px;">
            <i class="fa-solid fa-xmark" style="color: #000; font-size: 20px;"></i>
        </a>
    </div>

    <div class="container-login">
        <div class="container__wrapper">
            <div class="login__wrapper">
                <div class="log__box log__login">
                    <h2>Already an account?</h2>
                    <button class="btn__login">Sign in</button>
                </div>
                <div class="log__box log__logup">
                    <h2>Don't have an account</h2>
                    <button class="btn__logup">Sign up</button>
                </div>
            </div>
            <div class="login__form active">
                <div class="log__form-form login__signin-form">
                    <h3>Sign In</h3>
                    <form action="process-login.php" method="POST">
                        <input type="email" name="email" id="" placeholder="Email">
                        <input type="password" name="password" placeholder="Password" id="">
                        <button name="sign-in">Sign in</button>
                        <a href="#" class="forgot">Forgot password</a>
                    </form>
                </div>
                <div class="log__form-form login__signup-form">
                    <h3>Sign Up</h3>
                    <form action="process-logup.php" method="POST">
                        <input type="text" name="username" id="" placeholder="Username">
                        <input type="email" name="email" id="" placeholder="Email">
                        <input type="password" name="password" placeholder="Password" id="">
                        <button name="sign-up">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- JS here -->
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