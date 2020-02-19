<html>

<head>
    <base href="http://localhost:81/HOC_KY_5/cake_shop/">
    <meta charset="UTF-8" />
    <title>Shop Bánh Ngọt</title>
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="stylesheet" type="text/css" href="public/css/site.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="public/css/animate.css">
    <script type="text/javascript" src="public/js/update_cart.js"></script>
</head>
<script src="public/js/wow.js"></script>
<script>
    new WOW().init();
</script>

<body>
    <!-- Gọi Navbar -->
    <header>
        <!--Container header -->
        <div class="container">
            <!--Row header -->
            <div class="row">
                <!--Logo -->
                <div class="main-logo">
                    <h1><a href="Controller/Frontend.php?action=home">Cake Shop</a></h1>
                </div>
                <!--Main Nav -->
                <nav>
                    <ul class="menu-ul">
                        <li><a href="Controller/Frontend.php?action=home" title="Trang chủ"><span>Trang chủ</span></a></li>
                        <li><a href="Controller/Frontend.php?action=about" title="Giới thiệu"><span>Giới thiệu</span></a></li>
                        <li><a href="Controller/Frontend.php?action=product" title="Sản phẩm"><span>Sản phẩm</span></a></li>
                        <li><a href="Controller/Frontend.php?action=news" title="Tin tức"><span>Tin tức</span></a></li>
                        <li><a href="Controller/Frontend.php?action=contact" title="Liên hệ"><span>Liên hệ</span></a></li>
                        <li><a href="Controller/Frontend.php?action=register" title="Đăng ký"><span>Đăng ký</span></a></li>
                        <li><a href="Controller/Frontend.php?action=login" title="Đăng nhập"><span>Đăng nhập</span></a></li>
                        <li><a href="Controller/Frontend.php?action=showcart" title="Giỏ hàng"><span class="cart-nav">Giỏ hàng</span></a></li>
                        <div class="search-form">
                            <div class="menu-search">
                                <form method="get" action="search/keyword/" role="search"><input autocomplete="off" placeholder="Nhập tìm kiếm..." type="text" name="s" value=""></form>
                            </div>
                        </div>
                    </ul>
                </nav>
                <!--End nav -->
            </div>
            <!--End row-->
        </div>
        <!--End container -->
    </header>
    <!--Index Content -->

    <body>