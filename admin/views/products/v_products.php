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
        <div class="container__main-handler">
            <div class="container__main-link">
                <a href="add-product.php">
                    <i class="fa-solid fa-plus"></i>
                    Tạo sản phẩm mới
                </a>
            </div>
            <div class="container__main-search">
                <form action="">
                    <input type="search" name="search" id="" value="<?php echo $search; ?>"
                        placeholder="Tìm kiếm sản phẩm">
                </form>
            </div>
        </div>
        <div class="container__table">
            <table>
                <tr>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Sale</th>
                    <th>Hình ảnh</th>
                    <th>Mô tả</th>
                    <th>Ngày nhận</th>
                    <th>Loại sản phẩm</th>
                    <th>Tính năng</th>
                </tr>

                <!-- render-products -->
                <?php foreach ($list_products as $key => $each) : ?>
                <tr>
                    <td><?= $each->name_product; ?></td>
                    <td><?= $each->price; ?></td>
                    <td><?= $each->sale; ?></td>
                    <td>
                        <img src="public/front-end/images/products/<?= $each->image ?>" alt="" class="img_item">
                    </td>
                    <td class="container__table-desc-parent">
                        <div class="container__table-desc">
                            <p><?= $each->description; ?></p>
                        </div>
                    </td>
                    <td><?= $each->received_date; ?></td>
                    <td><?= $each->category_name; ?></td>
                    <td>
                        <a href="edit-product.php?id=<?= $each->id_product; ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="#" onclick="window.location.href='delete-product.php?id=<?= $each->id_product; ?>'">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <!-- pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination pb-3 d-flex justify-content-center">
                <?php for ($i = 1; $i <= $number_page; $i++) { ?>
                <li class="page-item">
                    <a class="page-link fs-3 px-3 text-danger mx-1"
                        href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>">
                        <?php echo $i ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </main>
</main>