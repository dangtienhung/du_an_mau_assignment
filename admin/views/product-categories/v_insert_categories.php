<!-- container -->
<main class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="app__title">
                <h3 class="app__title-title">Quản lý sản phẩm</h3>
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
                        <h1 class="modal-title fs-1" id="exampleModalLabel">Thêm mới loại sản phẩm</h1>
                    </div>
                    <div class="modal-body">
                        <form action="process-add-categories.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="username" class="form-label fs-3">Tên loại sản phẩm</label>
                                <input type="text" class="form-control fs-3" id="username"
                                    placeholder="Tên loại sản phẩm" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="descrtiption" class="form-label fs-3">Mô tả loại sản phẩm</label>
                                <textarea name="descrtiption" placeholder="Mô tả sản phẩm" class="form-control fs-3"
                                    id="descrtiption" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button class="fs-4 btn btn-danger" name="btn-submit" type="submit">Thêm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>