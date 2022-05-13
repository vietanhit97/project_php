<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\CategoryRequestStore as ReqStore;
use App\Http\Requests\Category\CategoryRequestUpdate as ReqUpdate;
class CategoryController extends Controller
{
    public function index(Request $req){
        $cats = Category::search()->paginate(4); // search() bên models category.php
        return view('admin.category.category',compact('cats'));
    }
    public function create(){
        return view('admin.category.create'); 
    }

    public function store(ReqStore $req)
    {
        if( Category::add()){ //post dữ liệu
            return redirect()->route('category.index')->with('ok','Thêm mới thành công !'); //chuyển hướng 
        }
        return redirect()->route('admin.category.creat')->with('no','Thêm mới thành công !');
         
    }
    public function destroy(Category $category) {
        if($category->products()->count()>0){
            return redirect()->route('category.index')->with('no','xóa không thành công ! sản phẩm tồn tại trong danh mục ');
        }
        $category->delete();
        return redirect()->route('category.index')->with('ok','xóa thành công !');
    }

    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }

    public function update(ReqUpdate $req,Category $category)
    {
        $category->updateCategory(); //post dữ liệu
        return redirect()->route('category.index')->with('ok','sửa thành công !'); // chuyển hướng link theo name->('category.index') 
    }
    public function trashed(){
        $cats = Category::search()->onlyTrashed()->paginate();
        return view('admin.category.trashed',compact('cats'));
    }
    public function restore($id){
        $category = Category::withTrashed()->find($id);
        $category->restore();
       return redirect()->route('category.index')->with('ok','Khôi phục thành công ');
    }
    public function forceDelete($id){
        $category = Category::withTrashed()->find($id);
        $category->forceDelete();
        return redirect()->route('category.trashed')->with('ok','Xóa vĩnh viễn thành công ');
    }
    // delete tran
}
