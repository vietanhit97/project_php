@extends('master.admin')
@section('title','Thêm Danh Mục')
@section('content')
<form action="{{route('category.store')}}" method="POST" role="form">
    <legend>Thêm mới Danh Mục</legend>
    @csrf
    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input type="text" class="form-control" name="name" id="" placeholder="Tên Danh Mục ">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="0" checked>
            Hiển thị
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="1">
            Tạm ẩn
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Thêm Mới</button>
</form>

@stop()