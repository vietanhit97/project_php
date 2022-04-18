<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.category');
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
        Category::create($req->only('name','status'));
        dd($req->all());
    }
}
