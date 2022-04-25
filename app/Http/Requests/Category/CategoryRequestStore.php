<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  // phân quyền người dùng
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [  
                'name' => 'required|unique:category'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống ',
            'name.unique' => 'Tên danh mục đã tồn tại'
        ];
    }
}
