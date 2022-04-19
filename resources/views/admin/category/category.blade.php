@extends('master.admin')
@section('content')

<form action="{{route('category.index')}}" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input type="text" name='key' class="form-control" id="" placeholder="Tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Danh Mục</th>
            <th>Trạng Thái</th>
            <th>Tùy chọn</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $cat)
        <tr> 
            <td>1</td>
            <td>{{$cat -> name}}</td>
            <td>{{$cat -> status==1 ? 'hiển thị ' : ' ẩn '}}</td>
            <td>
            <a href="" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$cats->appends(request()->all())->links()}}
@stop