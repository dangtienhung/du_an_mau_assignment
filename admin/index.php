<?php
include 'template/front-end/head.php';
@session_start();
?>

<!-- main -->
<div class="login__limit">
    <div class="login__container">
        <div class="login__wrapper">
            <div class="login__img">
                <img src="public/front-end/images/team.jpg" alt="">
            </div>

            <div class="login__form">
                <p class="login__form-title">
                    ĐĂNG NHẬP HỆ THỐNG
                </p>
                <!-- đăng nhập tài khoản & password -->
                <form action="process-login.php" method="POST" class="validate-form">
                    <div class="validate-input">
                        <span><i class="fa-solid fa-user"></i></span>
                        <input type="email" placeholder="Email quản trị" name="email" id="username" required>
                    </div>
                    <div class="validate-input">
                        <span><i class="fa-solid fa-key"></i></span>
                        <input autocomplete="off" class="input100" type="text" placeholder="Mật khẩu"
                            name="current-password" required>
                        <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                    </div>
                    <?php if (isset($_SESSION['error_login'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        Bạn đã sai tài khoản hoặc mật khẩu
                    </div>
                    <?php } ?>

                    <!-- đăng nhập -->
                    <div class="validate-form-btn">
                        <input type="submit" name="login" value="Đăng nhập" id="submit" onclick="validate()" />
                    </div>
                    <!-- /* quên mật khẩu */ -->
                    <div class="text-start mt-3">
                        <a href="" class="fs-5 text-black fw-normal">
                            Bạn quên mật khẩu?
                        </a>
                    </div>
                </form>
                </d>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include 'template/front-end/footer.php'; ?>