<!-- main -->
<!-- container -->
<main class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="app__title">
                <h3 class="app__title-title">Quản lý người dùng</h3>
                <div id="clock"></div>
            </div>
        </div>
    </div>

    <main class="container__main">
        <div class="" id="openModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog pb-3">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-1" id="exampleModalLabel">Sửa thông tin người dùng</h1>
                    </div>
                    <div class="modal-body">
                        <form action="process-edit-customer.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" class="form-control fs-3" id="id" placeholder="Tên người dùng"
                                name="id" value="<?= $each->id_customer; ?>">
                            <div class="mb-3">
                                <label for="username" class="form-label fs-3">Tên người dùng</label>
                                <input type="text" class="form-control fs-3" id="username" placeholder="Tên người dùng"
                                    name="username" value="<?= $each->customers_name; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label fs-3">Cập nhật hình ảnh</label>
                                <input class="form-control fs-3" type="file" id="image_new" name="image_new">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label fs-3">Hoặc giữ lại hình ảnh</label><br />
                                <input class="form-control fs-3" type="hidden" id="image_old" name="image_old"
                                    value="<?= $each->customer_avatar; ?>">
                                <img src="public/front-end/images/customer/<?= $each->customer_avatar; ?>"
                                    class="body__image img_item" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fs-3">Email người dùng</label>
                                <input type="text" class="form-control fs-3" id="email" placeholder="Email người dùng"
                                    name="email" value="<?= $each->customer_email ?>">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fs-3">Mật khẩu người dùng</label>
                                <input type="text" class="form-control fs-3" id="password"
                                    placeholder="Password người dùng" name="password"
                                    value="<?= $each->customer_password ?>">
                            </div>
                            <div class="modal-footer">
                                <button class="fs-4 btn btn-danger" name="btn-submit" type="submit">Sửa người
                                    dùng</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>