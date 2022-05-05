@extends('master.admin')
@section('title','Thêm sản phẩm')
@section('content')
<form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Thêm mới sản phẩm</legend>
    @csrf
    <div class="row">
        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" id="" placeholder="Tên sản phẩm ">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" id="content" class="form-control" rows="3"
                    placeholder="Mô tả sản phẩm..."></textarea>
            </div>
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
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
                <input type="file" class="form-control" name="upload" id="upload" placeholder="Ảnh sản phẩm ">
                <img src="" id="show_image" alt="" style="width:300px">
                @error('upload')
                <small class="help-block">{{$message}}</small>
                @enderror
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
        </div>

    </div>

</form>
@stop()
@section('js')
<script>
$('#upload').change(function(ev) {
    var input = $(this)[0];
    console.log(input);
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#show_image').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
})
</script>
@stop()