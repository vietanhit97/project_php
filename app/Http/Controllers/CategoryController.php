<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\CategoryRequestStore as ReqStore;
use App\Http\Requests\Category\CategoryRequestUpdate as ReqUpdate;
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

    public function store(ReqStore $req)
    {
        if( Category::create($req->only('name','status'))){ //post dữ liệu
            return redirect()->route('category.index')->with('ok','Thêm mới thành công !'); //chuyển hướng 
        }
        return redirect()->route('category.index')->with('no','Thêm mới không thành công !');
         
    }
    public function delete(Category $category) {
       $category->delete();
       return redirect()->route('category.index');
    }

    public function edit(Category $category){
       
        return view('admin.category.edit',compact('category'));
    }

    public function update(ReqUpdate $req,Category $category)
    {
      
        $category->update($req->only('name','status')); //post dữ liệu
        return redirect()->route('category.index'); // chuyển hướng link theo name->('category.index') 
    }
}
