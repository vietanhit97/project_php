<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\CustomerRequestStore as reqCus;
use App\Http\Requests\Customer\CustomerRequestLogin as reqCusLogin;
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
   public function productSingle(Product $product){
      return view('user.singleProduct',compact('product'));
   }
   public function registration(){
    return view('customer.registration');
    }
    public function createRegistration(reqCus $req){
       $data = $req -> only('name','email','password','phone','address');
       $data['password'] = bcrypt($req->password);
       if (Customer::create($data)) {
        return redirect()->route('user');
        }
        else {
        return redirect()->back();
        }
    }
    public function login(){
        return view('customer.login');
    }
    public function check_login(reqCusLogin $reqLogin,Request $req){
        $data=$req->only('email','password');
        // $password = bcrypt('123456') ; dd($password); // lấy mã hóa mất khẩu 
        $check = auth()->guard('customer')->attempt($data); // xác thực người dùng thủ công 
        if ($check) {
          return redirect()->route('user')->with('ok','Đăng nhập thành công !');
       }
       return redirect()->back()->with('no','Đăng nhập thất bại, vui lòng kiểm tra lại !');
    }
    public function logout() {
        auth()->guard('customer')->logout();
        return redirect()->route('user')->with('ok','Đăng xuất thành công !');
    }
}