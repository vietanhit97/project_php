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
   public function category(Category $category){
       $productOfCategory = $category->products()->paginate(4);
       return view('user.category',compact('productOfCategory','category'));
   }
}