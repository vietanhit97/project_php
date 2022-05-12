<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequestStore extends FormRequest
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
           'name' => 'required',
           'email' => 'required',
           'password' => 'required',
           'check_password' => 'required|same:password',
           'phone'=>'required',
           'address' => 'required'
        ];
    }
    public function messages(){
        return[    
        'name.required'=> 'Họ Tên không được để trống ',
        'email.required'=> 'Email không được để trống',
        'password.required'=>'mật khẩu không được để trống',
        'check_password.required' => 'Vui lòng xác thực mật khẩu ',
        'check_password.same' =>'Xác nhận mật khẩu chưa đúng ',
        'phone.required'=> 'Số điện thoại không được để trống',
        'address.required' => 'Địa chỉ không được để trống '
        ];
    }
}