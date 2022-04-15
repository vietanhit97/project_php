@extends('master.site')
@section('content')
    <div class="container">    
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat -> id}}</td>
                        <td>{{$cat -> name}}</td>
                        <td>{{$cat -> status==1 ? 'Hiển thị' : 'Ẩn'}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
@stop()


