<div>
    @foreach($data as $pro)
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="thumbnail">
            <img src="{{url('public/uploads')}}/{{$pro->image}}" alt="">
            <div class="caption">
                <h4>{{$pro->name}}</h4>
                <p>
                    @if($pro->sale_price >0)
                    <ins>{{ number_format($pro->sale_price)}}đ</ins> <del>{{number_format($pro->price)}} đ</del>
                    @else
                    <ins>{{number_format($pro->price)}}đ</ins>
                    @endif
                </p>
                <p>
                    <a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
                    <a href="{{route('user.productSingle',['product'=>$pro->id,'slug'=>Str::slug($pro->name)])}}" class="btn btn-primary"><i class="fa fa-link"></i>Chi Tiết</a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>