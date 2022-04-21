@extends('master.admin')
@section('content')
<form action="{{route('admin.category.update',$category->id)}}" method="POST" role="form">
    <legend>Thêm mới Danh Mục</legend>
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên Danh Mục</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}" id="" placeholder="name ">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="1" {{$category->status == 1 ? 'checked' : ''}}>
            Hiển thị
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="status" value="0" {{$category->status == 0 ? 'checked' : ''}}>
            Tạm ẩn
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Thêm Mới</button>
</form>
@stop()