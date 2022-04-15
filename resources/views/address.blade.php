@extends('master.site')
@section('title','address.html')
@section('content')
        <h1 class="text-center">Thông tin liên hệ</h1>  
      <div class="container">
      <form action="" method="POST" role="form">
            <div class="form-group">
                <label for="">địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Input field">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
@stop()
