<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">  
            <div class="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about')}}">about</a>
                    </li>
                    <li>
                        <a href="{{ route('product')}}">product</a>
                    </li>
                    <li>
                        <a href="{{ route('address')}}">address</a>
                    </li>
                </ul>
            </div>     
        </div>
    </header>
    @yield('content')
    <footer>
       <div class="container">
           <h1 class="text-center">footer</h1>
       </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>