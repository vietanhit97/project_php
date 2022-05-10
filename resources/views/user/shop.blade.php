@extends('master.user')
@section('title','Sản Phẩm')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Sản Phẩm</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($product as $pro)
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <div class="thumbnail">
                <img src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
                <div class="caption">
                    <h4>{{$pro->name}}</h4>
                    <p>
                        @if($pro->sale_price >0)
                        <ins>{{ number_format($pro->sale_price)}}đ</ins> <del>{{number_format($pro->price)}} đ</del>
                        @else
                        <ins>{{number_format($pro->price)}}đ</ins>
                        @endif
                    </p>
                    <p>
                        <a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
                        <a href="#" class="btn btn-primary"><i class="fa fa-link"></i>Chi Tiết</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
    {{$product->appends(request()->all())->links()}}
    </div>
</div>
@stop