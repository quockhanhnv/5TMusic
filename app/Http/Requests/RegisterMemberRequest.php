<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterMemberRequest extends FormRequest
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
            'email'          => 'required|unique:users,email,'.$this->id,
            'name'         => 'required',
            'phone'         => 'required',
            'password'  => 'required|min:6',
            'confirmpassword'   => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Dữ liệu không được để trống',
            'email.required'         => 'Dữ liệu không được để trống',
            'email.unique'           => 'Dữ liệu đã tồn tại',
            'phone.required'         => 'Dữ liệu không được để trống',
            'password.required'      => 'Dữ liệu không được để trống',
            'password.min' => "Mật khẩu tối thiểu phải là :min ký thự",
            'confirmpassword.required'      => 'Dữ liệu không được để trống',
            'confirmpassword.same' => "Xác nhận mật khẩu không khớp",
        ];
    }
}
