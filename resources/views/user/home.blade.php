@extends('master.user')
@section('title','Trang Chủ')
@section('carousel')
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
@stop
@section('content')
@foreach($categories as $cat)
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">{{ $cat->name}} Mới</h2>
                <div class="latest-product">
                    <div class="product-carousel">
                        @foreach($cat->products as $pro)
                        <div class="single-product text-center">
                            <div class="product-f-image">
                                <img src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
                                <div class="product-hover">
                                    <a href="{{route('cart.add',$pro->id)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Giỏ
                                        Hàng </a>
                                    <a href="{{route('user.productSingle',['product'=>$pro->id,'slug'=>Str::slug($pro->name)])}}"
                                        class="view-details-link"><i class="fa fa-link"></i> Chi Tiết </a>
                                </div>
                            </div>
                            <h2><a href="single-product.html">{{$pro->name}}</a></h2>
                            <div class="product-carousel-price text-center">
                                @if($pro->sale_price >0)
                                <ins>{{ number_format($pro->sale_price)}}đ</ins> <del>{{number_format($pro->price)}}
                                    đ</del>
                                @else
                                <ins>{{number_format($pro->price)}}đ</ins>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
@endforeach
@stop