<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{   
    use HasFactory,SoftDeletes;
    protected $table = 'product';
    protected $fillable = ['name','status','category_id','price','sale_price','description','image'];
    public function cat(){
       return $this->hasOne(Category::class,'id','category_id');
    }
    public function scopeSearch($query)
    {   
    if(request('key')){
        $key = request('key');
        $query=$query->where('name','like','%'.$key.'%');
    }
    return $query;
    }
    public function scopeAdd(){
        $ext = request()->upload->extension(); // lấy đuôi ảnh kiểu jpg,
        $file_name = time() . '.' . $ext; // tên ảnh theo thơi gian time () 
        request()->upload->move(public_path('uploads'), $file_name); // lưu ảnh vao thư mục 
        $data=request()->only('name','price','sale_price','category_id','description','image');
        $data['image'] = $file_name; // phải để dưới $req->only('name','price','sale_price','category_id','description','image');
        return $this->create($data);
    }
    public function scopeUpdateProduct(){
        $ext = request()->upload->extension(); // lấy đuôi ảnh kiểu jpg,
        $file_name = time() . '.' . $ext; // tên ảnh theo thơi gian time () 
        request()->upload->move(public_path('uploads'), $file_name); // lưu ảnh vao thư mục 
        $data = request()->only('name','price','sale_price','category_id','description','image');
        $data['image'] = $file_name; // phải để dưới $req->only('name','price','sale_price','category_id','description','image');
        return $this->update($data);
    }
 
}
