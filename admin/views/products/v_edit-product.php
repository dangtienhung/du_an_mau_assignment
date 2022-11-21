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
                        <h1 class="modal-title fs-1" id="exampleModalLabel">Cập nhật lại sản phẩm</h1>
                    </div>
                    <div class="modal-body">
                        <form action="process-edit-product.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" class="form-control fs-3" value="<?= $each_row->id_product; ?>"
                                    id="id_product" placeholder="Tên sản phẩm" name="id_product">
                            </div>
                            <div class="mb-3">
                                <label for="name_product" class="form-label fs-3">Tên sản phẩm</label>
                                <input type="text" class="form-control fs-3" id="name_product"
                                    value="<?= $each_row->name_product; ?>" placeholder="Tên sản phẩm"
                                    name="name_product">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label fs-3">Giá sản phẩm</label>
                                <input type="number" class="form-control fs-3" id="price"
                                    value="<?= $each_row->price; ?>" placeholder="Giá sản phẩm" name="price">
                            </div>
                            <div class="mb-3">
                                <label for="sale" class="form-label fs-3">Giảm giá sản phẩm</label>
                                <input type="number" min="0" class="form-control fs-3" id="sale"
                                    placeholder="Giảm giá sản phẩm" name="sale" value="<?= $each_row->sale; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label fs-3">Đổi hình ảnh mới</label>
                                <input class="form-control fs-3" type="file" id="image-new" name="image-new">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label fs-3">Hoặc giữ lại hình ảnh</label><br />
                                <input class="form-control fs-4" value="<?= $each_row->image; ?>" type="hidden"
                                    id="image-old" name="image-old">
                                <img src="public/front-end/images/products/<?php echo $each_row->image ?>"
                                    class="body__image img_item" />
                            </div>
                            <div class="mb-3">
                                <label for="descrtiption" class="form-label fs-3">Mô tả sản phẩm</label>
                                <textarea name="descrtiption" placeholder="Mô tả sản phẩm" class="form-control fs-4"
                                    id="descrtiption" rows="5"><?php echo $each_row->description ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="product_categories" class="form-label fs-3">Loại sản phẩm</label>

                                <select name="product_categories" class="form-select fs-3"
                                    aria-label="Default select example" id="product_categories">
                                    <?php foreach ($list_product_categories as $each) { ?>
                                    <option value="<?php echo $each->id; ?>">
                                        <?php echo $each->name_product_categories; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button class="fs-4 btn btn-danger" name="btn-submit" type="submit">Thêm sản
                                    phẩm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</main>