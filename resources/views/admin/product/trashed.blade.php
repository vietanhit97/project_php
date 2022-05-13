@extends('master.admin')
@section('content')

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
            <td>{{$pro -> status==1 ? 'Hiển Thị ' : ' Ẩn '}}</td>
            <td>{{$pro -> description}}</td>
            <td>
            <td>
           <form action="{{route('product.forceDelete',$pro->id)}}" method="POST" role="form">
               @csrf @method('DELETE')
            <a href="{{route('product.restore',$pro->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Khôi Phục</a>
            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không ?')"><i class="fa fa-trash-o mr-1" aria-hidden="true"></i>Xóa Vĩnh Viễn</button>
           </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$pros->appends(request()->all())->links()}}
@stop