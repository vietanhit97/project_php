<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // xóa vào thùng rác
class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'category';
    protected $fillable = ['name','status'];
    protected $dates = ['deleted_at'];
    public function products(){
        return $this->hasMany(Product::class,'category_id','id'); // truy van 1 cat - n pro
    }
    public function scopeSearch($query) // scopeSearch viết bên controller bỏ scope viết thương search
    {
        if (request('key')) {
            $key = request('key');
            $query = $query->where('name','like','%'.$key.'%');
        }
        return $query;
    }
    public function scopeAdd() // scopeSearch viết bên controller bỏ scope viết thương search
    {
        return $this->create(request()->only('name','status'));
    }
    public function scopeUpdateCategory() // scopeSearch viết bên controller bỏ scope viết thương search
    {
        return $this->update(request()->only('name','status'));
    }

}
