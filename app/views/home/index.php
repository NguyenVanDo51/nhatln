<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <style>
        .product-input {
            padding: 0 1rem;
            border: 1px solid;
            max-width: 6rem;
        }
    </style>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="<?= URL ?>">
                        <img src="images/logo.jpg" alt="Tue minh" style="max-height: 36px;" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box" style="height: 20px;">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Chọn sản phẩm</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo" style="border: none; background: transparent;">
            <a href="#">
                <img src="images/logo.jpg" alt="Cool Admin"/>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Chọn sản phẩm</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Sản phẩm đã chọn</h3>
                            <div class="task-progress">
                                <div id="products-choose" data-index="0" class="mb-3">(Trống)</div>
                                <h4 class="text-info">Tổng: <span id="products-sum"></span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">Lựa chọn sản phẩm</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters
                                    </button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item
                                    </button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div>
<!--                            <input type="hidden" name="info"-->
<!--                                   data-url="--><?//= URL ?><!--"-->
<!--                                   data-page="--><?//= isset($data['paginate']) ? $data['paginate'] : 0 ?><!--"/>-->
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2" id="product-table">
                                    <thead>
                                    <tr>
                                        <th>Mã</th>
                                        <th>Danh mục</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Đơn vị</th>
                                        <th>Tổng</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="spacer"></tr>
                                    <?php
                                    if ($data['products']) {
                                        foreach ($data['products'] as $product)
                                            echo '
                                            <tr class="tr-shadow">
                                                <td>' . $product->product_code . '</td>
                                                <td>' . $product->category . '</td>
                                                <td class="desc">' . $product->name . '</td>
                                                <td>' . $product->amount . '</td>
                                                <td>' . $product->price . '</td>
                                                <td>' . $product->unit . '</td>
                                                <td>' . $product->sum . '</td>
                                                <td>
                                                    <div class="table-data-feature" style="justify-content: center;">
                                                        <button class="item btn-choose-product" 
                                                            data-id= "' . $product->product_id . '" 
                                                            data-toggle="tooltip" data-placement="top" title="Thêm vào hóa đơn"
                                                            data-name="' . $product->name . '"
                                                            data-price="' . $product->price . '"
                                                            data-code="' . $product->product_code . '"
                                                        >
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                           ';
                                    }
//                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                            href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

<script>
    $(document).ready(function() {
        const handleAmountChange = () => {
            console.log(this);
        }

        var inCart = [];
        localStorage.setItem('sum', '0');
        $('.btn-choose-product').click(function() {
            var name = this.getAttribute('data-name');
            var productId = this.getAttribute('data-id');
            var price = this.getAttribute('data-price');
            var sum = Number(localStorage.getItem('sum'));
            var sum = sum + Number(price);
            localStorage.setItem('sum', sum);
            var price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(price);
            if (inCart.indexOf(productId) !== -1) return;
            inCart.push(productId);
            var productChoose = $("#products-choose");
            if(productChoose.attr('data-index') == 0) {
                productChoose.html(`<div class="mb-3">
                    <h5 class="mt-1" id="product-${productId}" data-price="${price}">${name}</h5>
                    <span style="min-width: 14rem;display: inline-block;">Tiền sản phẩm: ${price_format}</span>
                    <span class="mx-2"> X </span>
                    <input class="product-input" type="number" min="1" value="1" data-id="${productId}" data-price="${price}" name="value-product-${productId}" />
                    <span>=<span>
                    <span class="product-class-sum" id="product-${productId}-sum" data-sum=${price}>${price_format}</span>
                <div>`)
            } else {
                productChoose.append(`<div class="my-3">
                    <h5 class="mt-1" id="product-${productId}" data-price="${price}">${name}</h5>
                    <span style="min-width: 14rem;display: inline-block;">Tiền sản phẩm: ${price_format}</span>
                    <span class="mx-2"> X </span>
                    <input class="product-input" type="number" min="1" value="1" data-id="${productId}" data-price="${price}" name="value-product-${productId}" />
                    <span>=<span>
                    <span class="product-class-sum" id="product-${productId}-sum" data-sum=${price}>${price_format}</span>
                <div>`)
            }
            $('#products-sum').text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(sum));

            productChoose.attr('data-index', productChoose.attr('data-index') + 1);

            $('.product-input').change(function() {
                var p_id = this.getAttribute('data-id');
                var p_price = this.getAttribute('data-price');

                var p_price_format = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(p_price * this.value);
                $(`#product-${p_id}-sum`).attr('data-sum', String(p_price * this.value));
                $(`#product-${p_id}-sum`).text(p_price_format);

                var sumElements = $('.product-class-sum');
                var p_sum = Number(0);
                sumElements.each(function(index, value) {
                    p_sum = p_sum + Number(value.getAttribute('data-sum'));
                    console.log(Number(value.getAttribute('data-sum')));
                })
                localStorage.setItem('sum', p_sum);
                $('#products-sum').text(new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(p_sum));
            });
        })


    } );
</script>

</body>

</html>
<!-- end document-->
