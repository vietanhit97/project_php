@extends('master.admin')
@section('title','Thư mục rác Danh Mục')
@section('content')
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
            <td>{{$cat -> id}}</td>
            <td>{{$cat -> name}}({{$cat->products()->count()}})</td>
            <td>{{$cat -> status==1 ? 'hiển thị ' : ' ẩn '}}</td>
            <td>
           <form action="{{route('category.forceDelete',$cat->id)}}" method="POST" role="form">
               @csrf @method('DELETE')
            <a href="{{route('category.restore',$cat->id)}}" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Khôi Phục</a>
            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có muốn xóa không ?')"><i class="fa fa-trash-o mr-1" aria-hidden="true"></i>Xóa Vĩnh Viễn</button>
           </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$cats->appends(request()->all())->links()}}
@stop