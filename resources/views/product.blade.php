@extends('master.site')
@section('content')
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
@stop()
