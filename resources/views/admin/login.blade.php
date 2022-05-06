<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE | Đăng nhập</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{url('public/admincss')}}/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('public/admincss')}}/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('public/admincss')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{url('public/admincss')}}/css/AdminLTE.css">

    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">


    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Admin</b></a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Đăng nhập</p>
            <form action="" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <button type="submit" class="btn btn-primary btn-sm btn-flat">Đăng Nhập</button>
                    </div>
                </div>
            </form>
            <a href="#" >I forgot my password</a><br>
            <a href="register.html" class="text-center">Register a new membership</a>
        </div>
    </div>

    </body>

</html>