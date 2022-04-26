<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:product',
            'price'=> 'required',
            'category_id' => 'required',
            'upload' => [
                'required',
                'mimes:jpeg,jpg,png,gif' // đuôi ảnh 
            ]
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Tên không được để trống',
            'name.unique' => 'Tên đã tồn tại',
            'category_id' => 'Danh muc không được để trống',
            'price.required' => 'Giá không được để trống',
            'upload.required' => 'Ảnh không được để trống',
            'upload.mimes' => 'Định dạng file : jpeg,jpg,png,gif '
        ];
    }
}
