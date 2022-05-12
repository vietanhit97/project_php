@extends('master.user')
@section('title','Đăng ký')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Đăng ký</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt mb">
    <div class="row">
        <form action="" method="POST" role="form">
            @csrf
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="">Họ Tên</label>
                    <input type="text" class="form-control" name="name" id="" placeholder="Họ và tên">
                    @error('name')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Điện Thoại</label>
                    <input type="text" class="form-control" name="phone" id="" placeholder="Số Điện Thoại">
                    @error('phone')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" id="" placeholder="Địa chỉ">
                    @error('address')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="" placeholder="Tài khoản Email">
                    @error('email')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" id="" placeholder="Mật khẩu">
                    @error('password')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Xác Nhận Mật khẩu</label>
                    <input type="password" class="form-control" name="check_password" id=""
                        placeholder="Xác Nhận Mật khẩu">
                    @error('check_password')
                    <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success center">Đăng ký</button>
            </div>
          
        </form>
    </div>

</div>
@stop