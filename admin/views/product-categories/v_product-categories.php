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
                <a href="add-product-category.php">
                    <i class="fa-solid fa-plus"></i>
                    Tạo sản phẩm mới
                </a>
            </div>
            <div class="container__main-search">
                <form action="">
                    <input type="search" name="search" id="" placeholder="Tìm kiếm sản phẩm"
                        value="<?php echo $search ?>">
                </form>
            </div>
        </div>
        <div class="container__table">
            <table>
                <tr>
                    <th>Loại sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Tính năng</th>
                </tr>

                <!-- render-products -->
                <?php foreach ($list_categories as $key => $each) : ?>
                <tr>
                    <td><?= $each->name_product_categories; ?></td>
                    <td class="container__table-desc-parent">
                        <div class="container__table-desc">
                            <p><?= $each->description; ?></p>
                        </div>
                    </td>
                    <td>
                        <a href="edit-product-category.php?id=<?= $each->id; ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="#" onclick="window.location.href='delete-product-category.php?id=<?= $each->id; ?>'">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</main>