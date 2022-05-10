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
<div class="container mt">
    <div class="row">
    <x-product-list :data="$product"/>
    </div>
    <div class="text-center">
    {{$product->appends(request()->all())->links()}}
    </div>
</div>
@stop