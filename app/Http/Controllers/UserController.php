<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function home(){
       $proCarousel = Product::productCarousel();
       return view('user.home',compact('proCarousel'));
   }
   public function shop(){
       $product = Product::paginate(8);
       return view('user.shop',compact('product'));
   }
   public function phone(){
    $productPhone = Product::productPhone();
    return view('user.phone',compact('productPhone'));
    }
    public function laptop(){
        $productLaptop = Product::productLaptop();
        return view('user.laptop',compact('productLaptop'));
    }
}