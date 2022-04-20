<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(Request $req){
        $cats = Category::paginate(1);
        if($req->key){ // lay key từ form 
            $key = $req->key; // gán key tren form 
            $cats= Category::where('name','like','%'.$key.'%')->paginate(1); //truy vấn
        }
        return view('admin.category.category',compact('cats'));
    }
    public function creat(){
        return view('admin.category.creat');
    }
    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|unique:category'
        ],[
            'name.required' => 'Tên không được để trống ',
            'name.unique' => 'Tên danh mục đã tồn tại'
        ]);
        Category::create($req->only('name','status')); //post dữ liệu
        return redirect()->route('category.index'); // chuyển hướng link theo name->('category.index') router ở web.php
    }
    public function delete(Category $category) {
       $category->delete();
       return redirect()->route('category.index');
    }

}
