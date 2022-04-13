<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $cats = Category::all(); // Truy vấn ngầm  
        return view('home',compact('cats'));
    }
    public function product(){
        $pros = Product::all(); //
        return view('product',compact('pros'));
    }
    public function about(){
        return view('about');
    }
    public function adress(){
        return view('adress');
    }
}
