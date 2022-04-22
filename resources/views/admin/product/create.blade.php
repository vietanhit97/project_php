@extends('master.admin')
@section('content')
<form action="{{route('admin.product.store')}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Thêm mới sản phẩm</legend>
    @csrf
    <div class="form-group">
        <label for="">Danh mục sản phẩm</label>
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
        <input type="text" class="form-control" name="name" id="" placeholder="Tên sản phẩm ">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm</label>
        <input type="text" class="form-control" name="price" id="" placeholder="Giá sản phẩm ">
        @error('price')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Giá khuyến mãi</label>
        <input type="text" class="form-control" name="sale_price" id="" placeholder="Giá khuyến mãi ">
        @error('sale_price')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Ảnh sản phẩm</label>
        <input type="file" class="form-control" name="upload" id="" placeholder="Ảnh sản phẩm ">
        @error('upload')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <textarea name="description" id="content" class="form-control" rows="3" placeholder="Mô tả sản phẩm..."></textarea>
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
    <button type="submit" class="btn btn-primary">Thêm Mới</button>
</form>

@stop()