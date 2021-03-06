<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\Product\ProductRequestStore as reqPro;
class ProductController extends Controller
{   
    public function index(Request $req){
        $pros = Product::search()->paginate(1);
        return view('admin.product.product',compact('pros'));
    }
    public function create(){
        $cats = Category::all();
        return view('admin.product.create',compact('cats'));
    }
    public function store(reqPro $req){ 
        if(Product::add()){
        return redirect()->route('product.index')->with('ok','thêm mới sản phẩm thành công');
        } 
        return redirect()->route('product.index')->with('no','thêm mới sản phẩm thành công');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('ok','xóa sản phẩm thành công');
    }
    public function edit(Product $product){
        $cats = Category::all();
        return view('admin.product.edit',compact('product','cats'));
    }
    public function update(reqPro $req,Product $product){
        $product->updateProduct();
        return redirect()->route('product.index');
    }
    public function show(Product $product) {
        return view('admin.product.show',compact('product'));
    }
    public function trashed(){
        $pros = Product::search()->onlyTrashed()->paginate(4);
        return view('admin.product.trashed',compact('pros'));
    }
    public function restore($id){
        $pros = Product::withTrashed()->find($id);
        $pros->restore();
       return redirect()->route('product.index')->with('ok','Khôi phục thành công ');
    }
    public function forceDelete($id){
        $pros = Product::withTrashed()->find($id);
        $pros->forceDelete();
        return redirect()->route('product.trashed')->with('ok','Xóa vĩnh viễn thành công ');
    }
}