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
                <!-- <a data-bs-toggle="modal" data-bs-target="#openModal" class="text-white" style="cursor: pointer;">
                    <i class="fa-solid fa-plus"></i>
                    Tạo sản phẩm mới
                </a> -->
            </div>
            <div class="container__main-search">
                <form action="">
                    <input type="search" name="search" id="" placeholder="Tìm kiếm bình luận">
                </form>
            </div>
        </div>
        <div class="container__table">
            <table>
                <tr>
                    <th>Người dùng</th>
                    <th>Sản phẩm</th>
                    <th>Nội dung bình luận</th>
                    <th>Thời gian bình luận</th>
                    <th>Tính năng</th>
                </tr>

                <!-- render-products -->
                <?php foreach ($comments as $key => $comment) : ?>
                <tr>
                    <td><?= $comment->customers_name; ?></td>
                    <td><?= $comment->name_product; ?></td>
                    <td class="container__table-desc-parent">
                        <div class="container__table-desc">
                            <p><?= $comment->comment_desc; ?></p>
                        </div>
                    </td>
                    <td><?= $comment->comment_date; ?></td>
                    <td>
                        <a href="delete-comment.php?id=<?= $comment->id_comment; ?>">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </main>
</main>