<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequestUpdate extends FormRequest
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
            'name' => 'required|unique:category,name,'.$this->route('category')->id // 'category' tham số url ở route web.php
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
