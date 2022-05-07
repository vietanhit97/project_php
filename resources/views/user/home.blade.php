@extends('master.user')
@section('title','Trang Chủ')
@section('content')
<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản Phẩm Mới</h2>
                        <div class="product-carousel">
                            @foreach($proCarousel as $pro)
                            <div class="single-product text-center">
                                <div class="product-f-image">
                                    <img src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Giỏ
                                            Hàng </a>
                                        <a href="single-product.html" class="view-details-link"><i
                                                class="fa fa-link"></i> Chi Tiết </a>
                                    </div>
                                </div>
                                <h2><a href="single-product.html">{{$pro->name}}</a></h2>
                                <div class="product-carousel-price text-center">
                                    @if($pro->sale_price >0)
                                    <ins>{{ number_format($pro->sale_price)}}đ</ins> <del>{{number_format($pro->price)}} đ</del>
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
@stop