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

    <!-- container main -->
    <main class="container__main">
        <div class="container__main-handler">
            <div class="container__main-link">
                <a href="add-customer.php">
                    <i class="fa-solid fa-plus"></i>
                    Thêm người dùng mới
                </a>
            </div>
            <div class="container__main-search">
                <form action="">
                    <input type="search" name="search" id="" placeholder="Tìm kiếm người dùng">
                </form>
            </div>
        </div>
        <div class="container__table">
            <table>
                <tr>
                    <th>Tên người dùng</th>
                    <th>Hình ảnh</th>
                    <th>Email</th>
                    <th>Ngày đăng ký</th>
                    <th>Tính năng</th>
                </tr>

                <!-- render-products -->
                <?php foreach ($list_customers as $key => $each) : ?>
                <tr>
                    <td><?= $each->customers_name; ?></td>
                    <td>
                        <img src="public/front-end/images/customer/<?= $each->customer_avatar; ?>" alt=""
                            class="img_item">
                    </td>
                    <td><?= $each->customer_email; ?></td>
                    <td><?= $each->date_register; ?></td>
                    <td>
                        <a href="edit-customer.php?id=<?= $each->id_customer; ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="delete-customer.php?id=<?= $each->id_customer; ?>">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</main>