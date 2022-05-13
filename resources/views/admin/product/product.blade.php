@extends('master.admin')
@section('title','Danh sách sản phẩm')
@section('content')

<form action="{{route('product.index')}}" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input type="text" name='key' class="form-control" id="" placeholder="Tìm kiếm">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
    <a href="{{route('product.create')}}" class="btn btn-success"><i class="fa fa-plus"
            aria-hidden="true"></i>Thêm Mới</a>
</form>
<table class="table table-hover mt-5">
    <thead>
        <tr>
            <th>ID Sản Phẩm</th>
            <th>Danh Mục</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Sản Phẩm</th>
            <th>Giá Khuyến mãi</th>
            <th>Ảnh</th>
            <th>Trạng Thái</th>
            <th>Mô Tả</th>
            <th>Tùy chọn</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pros as $pro)
        <tr>
            <td>{{$pro -> id}}</td>
            <td>{{$pro -> cat-> name}}</td>
            <td>{{$pro -> name}}</td>
            <td>{{$pro -> price}}</td>
            <td>{{$pro -> sale_price}}</td>
            <td><img src="{{url('public/uploads')}}/{{$pro -> image}}" alt="" width="60px"></td>
            <td>
            @if($pro->status == 1)
                <span class="label label-danger"> Tạm ẩn</span>
                @else
                <span class="label label-success"> Hiển thị</span>
                @endif
            </td>
            <td>{{$pro -> description}}</td>
            <td>
            <form action="{{route('product.destroy',$pro->id)}}" method="POST" role="form">
               @csrf @method('DELETE')
            <a href="{{route('product.edit',$pro->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="{{route('product.show',$pro->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không ?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
           </form>   
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>
{{$pros->appends(request()->all())->links()}}
<div class="text-right">
    <a href="{{route('product.trashed')}}" class="btn btn-default "><i class="fa fa-trash" aria-hidden="true"></i>Thùng
        Rác</a>
</div>
@stop