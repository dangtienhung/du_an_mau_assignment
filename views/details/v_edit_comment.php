<?php @session_start(); ?>

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <div class="breadcrumb-area breadcrumb-style-two" data-background="public/layout/img/bg/s_breadcrumb_bg01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="previous-product">
                        <a href="shop-details.html"><i class="fas fa-angle-left"></i> previous product</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Winter 20</a></li>
                                <li class="breadcrumb-item"><a href="shop.html">Women</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <?= $detail->name_product_categories; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="next-product">
                        <a href="shop-details.html">Next product <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- shop-details-area -->
    <section class="shop-details-area pt-100 pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="shop-details-flex-wrap">
                        <div class="shop-details-nav-wrap">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one"
                                        role="tab" aria-controls="item-one" aria-selected="true"><img
                                            src="admin/public/front-end/images/products/<?= $detail->image; ?>"
                                            alt=""></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="item-two-tab" data-toggle="tab" href="#item-two" role="tab"
                                        aria-controls="item-two" aria-selected="false"><img
                                            src="admin/public/front-end/images/products/<?= $detail->image; ?>"
                                            alt=""></a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="item-three-tab" data-toggle="tab" href="#item-three"
                                        role="tab" aria-controls="item-three" aria-selected="false"><img
                                            src="admin/public/front-end/images/products/<?= $detail->image; ?>"
                                            alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-details-img-wrap">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="item-one" role="tabpanel"
                                    aria-labelledby="item-one-tab">
                                    <div class="shop-details-img">
                                        <img src="admin/public/front-end/images/products/<?= $detail->image; ?>" alt=""
                                            style="object-fit: cover; width: 100%;">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                    <div class="shop-details-img">
                                        <img src="public/layout/img/product/shop_details_img02.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="item-three" role="tabpanel"
                                    aria-labelledby="item-three-tab">
                                    <div class="shop-details-img">
                                        <img src="public/layout/img/product/shop_details_img03.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="shop-details-content">
                        <a href="#" class="product-cat"><?= $detail->name_product_categories; ?></a>
                        <h3 class="title"><?= $detail->name_product; ?></h3>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="style-name">Style Name : <?= $detail->name_product_categories; ?></p>
                        <div class="price">Price : $ <?= $detail->price; ?>.00</div>
                        <div class="product-details-info">
                            <span>Size <a href="#">Guide</a></span>
                            <div class="sidebar-product-size mb-30">
                                <h4 class="widget-title">Product Size</h4>
                                <div class="shop-size-list">
                                    <ul>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-product-color">
                                <h4 class="widget-title">Color</h4>
                                <div class="shop-color-list">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="perched-info">
                            <div class="cart-plus-minus">
                                <form action="#" class="num-block">
                                    <input type="text" class="in-num" value="1" readonly="">
                                    <div class="qtybutton-box">
                                        <span class="plus"><img src="public/layout/img/icon/plus.png" alt=""></span>
                                        <span class="minus dis"><img src="public/layout/img/icon/minus.png"
                                                alt=""></span>
                                    </div>
                                </form>
                            </div>
                            <a href="#" class="btn">add to cart</a>
                            <div class="wishlist-compare">
                                <ul>
                                    <li><a href="#"><i class="far fa-heart"></i> Add to Wishlist</a></li>
                                    <li><a href="#"><i class="fas fa-retweet"></i> Add to Compare List</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details-share">
                            <ul>
                                <li>Share :</li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-desc-wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">Description Guide</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="reviews" aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="product-desc-title mb-30">
                                    <h4 class="title">Additional information :</h4>
                                </div>
                                <p><?= nl2br($detail->description); ?></p>
                                <div class="color-size-info">
                                    <ul>
                                        <li><span>COLOR :</span> Black, Gray</li>
                                        <li><span>SIZE :</span> XS, S, M, L</li>
                                    </ul>
                                </div>
                                <div class="additional-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Size Name</th>
                                                    <td>28</td>
                                                    <td>49</td>
                                                    <td>36</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Waist Stretch</th>
                                                    <td>19</td>
                                                    <td>38</td>
                                                    <td>31</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Hip (7½” below from waist)</th>
                                                    <td>11</td>
                                                    <td>18</td>
                                                    <td>21</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">length (Out seam)</th>
                                                    <td>28</td>
                                                    <td>31</td>
                                                    <td>19</td>
                                                    <td>55</td>
                                                    <td>44</td>
                                                    <td>34</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <p>The purpose of lorem ipsum is to create a natural looking block of text
                                    (sentence, paragraph, page, etc.) that doesn't
                                    distract from the layout. A practice not without controversy, laying out
                                    pages with meaningless filler text can be very
                                    useful when the focus is meant to be on design, not content.</p>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="product-desc-title mb-30">
                                    <?php if (isset($count_comment)) { ?>
                                    <?php if ($count_comment == 0) { ?>
                                    <h4 class="title">Reviews (0) :</h4>
                                    <?php } else { ?>
                                    <h4 class="title">Reviews (<?= $count_comment; ?>) :</h4>
                                    <?php } ?>
                                    <?php } else { ?>
                                    <h4 class="title">Reviews (0) :</h4>
                                    <?php } ?>
                                </div>

                                <?php if (isset($comments)) { ?>
                                <?php foreach ($comments as $key => $comment) { ?>
                                <div class="alert alert-light" role="alert">
                                    <p class="mb-0"><?= nl2br($comment->comment_desc); ?></p>
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-0 text-decoration-underline">
                                            <a class="d-inline text-decoration-underline alert-light me-3"
                                                href="edit-comment.php?comment=<?= $comment->id_comment; ?>&product=<?= $comment->id_product; ?>&desc=<?= $comment->comment_desc; ?>"
                                                style="margin-right: 8px; text-decoration: underline;">Sửa</a>
                                            <a class="d-inline text-decoration-underline alert-light"
                                                href="delete-comment.php?comment=<?= $comment->id_comment; ?>&product=<?= $comment->id_product; ?>"
                                                style="margin-right: 8px; text-decoration: underline;">Xóa</a>
                                        </p>
                                        <p class="text-right mb-0">Ngày cmt: <?= $comment->comment_date; ?></p>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } else { ?>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <p class="adara-review-title">Be the first to review “Adara”</p>
                                <div class="review-rating">
                                    <span>Your rating *</span>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <?php } ?>

                                <form action="edit-process-comments.php" method="POST" class="comment-form review-form">
                                    <span>Your review *</span>
                                    <input type="hidden" name="id_product" value="<?php echo $_GET['id']; ?>">
                                    <input type="hidden" name="comment" value="<?php echo $_GET['comment']; ?>">
                                    <input type="hidden" name="id_customer"
                                        <?php if (isset($_SESSION['id_customer'])) { ?>
                                        value="<?= $_SESSION['id_customer']; ?>" <?php } ?> />
                                    <textarea name="message" id="comment-message"
                                        placeholder="Your Comment"><?php echo $_GET['desc']; ?></textarea>
                                    <div class="row" style="display: none;">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Your Name*" name="username"
                                                <?php if (isset($_SESSION['customers_name'])) { ?>
                                                value="<?= $_SESSION['customers_name']; ?>" <?php } ?> />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" placeholder="Your Email*" name="email"
                                                <?php if (isset($_SESSION['customer_email'])) { ?>
                                                value="<?= $_SESSION['customer_email']; ?>" <?php } ?> />
                                        </div>
                                    </div>
                                    <button class="btn" name="btn-submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="related-product-wrap">
                <div class="row">
                    <div class="col-12">
                        <div class="related-product-title">
                            <h4 class="title">You May Also Like...</h4>
                        </div>
                    </div>
                </div>
                <div class="row related-product-active">
                    <?php if (!empty($list_detail)) { ?>
                    <?php foreach ($list_detail as $key => $value) { ?>
                    <div class="col-xl-3">
                        <div class="new-arrival-item text-center">
                            <div class="thumb mb-25">
                                <a href="details.php"><img
                                        src="admin/public/front-end/images/products/<?= $value->image; ?>" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                        <li><a href="details.php"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="details.php"><?= $value->name_product; ?></a></h5>
                                <span class="price">$<?= $value->price; ?>.00</span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } else { ?>
                    <h2 class="text-center">Đang cập nhập!</h2>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-details-area-end -->

</main>
<!-- main-area-end -->