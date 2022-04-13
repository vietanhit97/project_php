
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
        <div class="container">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>price</th>
                        <th>sale_price</th>
                        <th>image</th>
                        <th>category_id</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pros as $pro)
                    <tr>
                        <td>{{$pro -> id}}</td>
                        <td>{{$pro -> name}}</td>
                        <td>{{$pro -> price}}</td>
                        <td>{{$pro -> sale_price}}</td>
                        <td>{{$pro -> image}}</td>
                        <td>{{$pro -> category_id}}</td>
                        <td>{{$pro -> status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
