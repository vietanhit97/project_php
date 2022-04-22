<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        return view('admin.product.product');
    }
    public function create(){
        $cats = Category::all();
        return view('admin.product.create',compact('cats'));
    }
    public function store(Request $req){ //$req->upload upload lấy name=upload htm
        
        $req->validate([
            'name' => 'required|unique:product',
            'price'=> 'required',
            'category_id' => 'required',
            'upload' => [
                'required',
                'mimes:jpeg,jpg,png,gif' // đuôi ảnh 
            ]
        ],[
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên đã tồn tại',
            'category_id' => 'Danh muc không được để trống',
            'price.required' => 'Giá không được để trống',
            'upload.required' => 'Ảnh không được để trống',
            'upload.mimes' => 'Định dạng file : jpeg,jpg,png,gif '
        ]);
        $ext = $req->upload->extension(); // lấy đuôi ảnh kiểu jpg,
        $file_name = time() . '.' . $ext; // tên ảnh theo thơi gian time () 
        $req->upload->move(public_path('uploads'), $file_name); // lưu ảnh vao thư mục 
        $data=$req->only('name','price','sale_price','category_id','description','image');
        $data['image'] = $file_name; // phải để dưới $req->only('name','price','sale_price','category_id','description','image');
        Product::create($data); // thêm sản phẩm
        dd($data);
    }
}
