@extends('master.user')
@section('title','Đăng nhập')
@section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Đăng Nhập</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt mb">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="text">
                                    @error('email')
                                    <small class="help-block">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password"
                                        value="">
                                    @error('password')
                                    <small class="help-block">{{$message}}</small>
                                    @enderror
                                </div>
                                <button type="summit" class="btn btn-primary">Đăng nhập</button>
                                <a href="{{route('user.registration')}}" class="btn btn-success ">Đăng ký</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop