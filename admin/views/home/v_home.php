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

    <div class="row mt-3">
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <!-- item1 -->
                <div class="col-md-6 mb-4">
                    <div class="analysis">
                        <i class="icon--customer fa-solid fa-users-gear"></i>
                        <div class="analysis__info">
                            <h4>Tổng khách hàng</h4>
                            <p><b><?php echo $customer_count; ?> khách hàng</b></p>
                            <p class="analysis__info-sum">Tổng số khách hàng được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- item1 -->
                <div class="col-md-6 mb-4">
                    <div class="analysis">
                        <i class="icon--product fa-solid fa-database"></i>
                        <div class="analysis__info">
                            <h4>Tổng sản phẩm</h4>
                            <p><b><?php echo $product_count; ?> sản phẩm</b></p>
                            <p class="analysis__info-sum">Tổng số sản phẩm được quản lý.</p>
                        </div>
                    </div>
                </div>

                <!-- item1 -->
                <div class="col-md-6 mb-4">
                    <div class="analysis">
                        <i class="icon--comment fa-solid fa-comment"></i>
                        <!-- <i class="icon--comment fa-brands fa-shopify"></i> -->
                        <div class="analysis__info">
                            <h4>Tổng bình luận</h4>
                            <p><b><?php echo $comment_count ?> bình luận</b></p>
                            <p class="analysis__info-sum">Tổng số bình luận được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- item1 -->

                <!-- item1 -->
                <div class="col-md-6 mb-4">
                    <div class="analysis">
                        <i class="icon--comment fa-solid fa-comment"></i>
                        <!-- <i class="icon--comment fa-brands fa-shopify"></i> -->
                        <div class="analysis__info">
                            <h4>Tổng các loại sản phẩm</h4>
                            <p><b><?php echo $count_product_categories ?> các loại sản phẩm</b></p>
                            <p class="analysis__info-sum">Tổng số các loại sản phẩm được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- item1 -->
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="content__chart">
                        <h3 class="content__chart-title">Phân tích dữ liệu</h3>
                        <div class="content__chart-graph">
                            <canvas id="myChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
const myChartElement = document.getElementById('myChart')

if (myChartElement) {
    const ctx = myChartElement.getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Bình luận', 'Khách hàng', 'Sản phẩm', 'Các loại sản phẩm'],
            datasets: [{
                label: '# of Votes',
                data: [
                    <?php echo $comment_count; ?>,
                    <?php echo $customer_count; ?>,
                    <?php echo $product_count; ?>,
                    <?php echo $count_product_categories ?>
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(75, 192, 192, 1)',
                ],
                borderWidth: 1,
            }]
        }
    });
}
</script>