@extends('master.admin')
@section('content')
<form action="{{route('admin.category.store')}}" method="POST" role="form">
    <legend>Form title</legend>
    @csrf
    <div class="form-group">
        <label for="">name</label>
        <input type="text" class="form-control" name="name" id="" placeholder="name ">
        @error('name')
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop()