<!-- container -->
<main class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="app__title">
                <h3 class="app__title-title">Quản lý bình luận</h3>
                <div id="clock"></div>
            </div>
        </div>
    </div>

    <!-- container main -->
    <main class="container__main">
        <div class="" id="openModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog pb-3">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-1" id="exampleModalLabel">Thêm mới bình luận</h1>
                    </div>
                    <div class="modal-body">
                        <form action="process-add-comment.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="username" class="form-label fs-3">Người bình luận</label>
                                <input type="text" class="form-control fs-3" id="username" placeholder="Tên người dùng"
                                    name="username" value="<?= $comments->customers_name; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label fs-3">Người bình luận</label>
                                <input type="text" class="form-control fs-3" id="username" placeholder="Tên người dùng"
                                    name="username" value="<?= $comments->customers_name; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fs-3">Mật khẩu người dùng</label>
                                <input type="text" class="form-control fs-3" id="password"
                                    placeholder="Password người dùng" name="password">
                            </div>
                            <div class="modal-footer">
                                <button class="fs-4 btn btn-danger" name="btn-submit" type="submit">Thêm người
                                    dùng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>