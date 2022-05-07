<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('public/usercss')}}/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('public/usercss')}}/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('public/usercss')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('public/usercss')}}/style.css">
    <link rel="stylesheet" href="{{url('public/usercss')}}/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> Tài Khoản</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Yêu Thích</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Đăng Nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="{{url('public/usercss')}}/img/logo.png"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Giỏ Hàng - <span class="cart-amunt">$100</span> <i
                                class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class=""><a href="{{route('user')}}">Trang Chủ</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh Mục <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('user.phone')}}">Điện Thoại</a></li>
                            <li><a href="{{route('user.laptop')}}">Lap Top</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('user.shop')}}">Sản Phẩm</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm ">
                    </div>
                    <button type="submit" class="btn btn-default">Tìm kiếm</button>
                </form>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>


    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    <img src="{{url('public/usercss')}}/img/h4-slide.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            iPhone <span class="primary">13 <strong>Pro Max</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Mới</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Chi Tiết</a>
                    </div>
                </li>
                <li><img src="{{url('public/usercss')}}/img/h4-slide2.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Giảm Giá <span class="primary">50% <strong></strong></span>
                        </h2>
                        <h4 class="caption subtitle">Back To School</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Chi Tiết</a>
                    </div>
                </li>
                <li><img src="{{url('public/usercss')}}/img/h4-slide3.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Máy Nghe Nhạc</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Chi Tiết</a>
                    </div>
                </li>
                <li><img src="{{url('public/usercss')}}/img/h4-slide4.png" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">& Phone</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Chi Tiết</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Ngày Trở lại</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Miễn Phí Giao Hàng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Thanh Toán Nhanh </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Sản Phẩm Mới</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
  @yield('content')
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="{{url('public/usercss')}}/img/brand1.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand2.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand3.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand4.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand5.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand6.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand1.png" alt="">
                            <img src="{{url('public/usercss')}}/img/brand2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus
                            vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet
                            eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam.
                            Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Khách Hàng </h2>
                        <ul>
                            <li><a href="#">Tài Khoản</a></li>
                            <li><a href="#">Lịch Sử Mua Hàng</a></li>
                            <li><a href="#">Yêu Thích</a></li>
                            <li><a href="#">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh Mục</h2>
                        <ul>
                            <li><a href="#">Điện Thoại</a></li>
                            <li><a href="#">Lap Top</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Bản Tin</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to
                            your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nhập Email">
                                <input type="submit" value="Đăng Ký">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; © 2020. CÔNG TY CỔ PHẦN XÂY DỰNG VÀ ĐẦU TƯ THƯƠNG MẠI HOÀNG HÀ <a href="https://www.facebook.com/vietanhabc/"
                                target="_blank">https://www.facebook.com/vietanhabc</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
    </script>

    <!-- jQuery sticky menu -->
    <script src="{{url('public/usercss')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public/usercss')}}/js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="{{url('public/usercss')}}/js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="{{url('public/usercss')}}/js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="{{url('public/usercss')}}/js/bxslider.min.js"></script>
    <script type="text/javascript" src="{{url('public/usercss')}}/js/script.slider.js"></script>
</body>

</html>