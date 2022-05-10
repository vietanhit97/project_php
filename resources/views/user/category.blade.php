@extends('master.user')
@section('title',$category->name)
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>{{$category->name}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt">
    <div class="row">
    <x-product-list :data="$productOfCategory"/>
    </div>
    <div class="text-center">
    {{$productOfCategory->appends(request()->all())->links()}}
    </div>
</div>
@stop