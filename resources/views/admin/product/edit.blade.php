@extends('master.admin')
@section('title','Sửa sản phẩm')
@section('content')
<form action="{{route('product.update',$product->id)}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Sửa sản phẩm</legend>
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Danh mục sản phẩm hiện tại </label>
        <input type="text" class="form-control" name="category_id" value="{{$product->cat->name}}" placeholder="Tên sản phẩm " readonly>
    </div>
    <div class="form-group">
        <label for=""> Danh mục sản phẩm</label>
        <select id="input" name="category_id" class="form-control" required="required">
            <option value="">Chọn Danh Mục</option>
            @foreach($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" value="{{$product->name}}" id="" placeholder="Tên sản phẩm ">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="number" class="form-control" name="price" value="{{$product->price}}" id="" placeholder="Giá sản phẩm ">
        @error('price')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Giá khuyến mãi</label>
        <input type="number" class="form-control" name="sale_price"  value="{{$product->sale_price}}" id="" placeholder="Giá khuyến mãi ">
        @error('sale_price')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
    <label for="">Ảnh :</label>
    <img src="{{url('public/uploads')}}/{{$product->image}}" width="80px" alt="">
    </div>
    <div class="form-group">
        <label for="">Chọn ảnh mới</label>
        <input type="file" class="form-control" name="upload" value="{{$product->image}}" id="" placeholder="Ảnh sản phẩm ">
        @error('upload')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <textarea name="description" id="content" value="{{ $product->description }}" class="form-control" rows="3" placeholder="Mô tả sản phẩm..."></textarea>
    </div>
    <div class="form-group">
        <label for="">Trạng Thái</label>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" checked>
                Hiển thị
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0">
                Tạm ẩn
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Sửa</button>
</form>

@stop()