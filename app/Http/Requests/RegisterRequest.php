<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'Birthday'=>'required',
            'username'=>'required|min:6',
            'password'=>'required|min:8|max:32',
            'passwordAgain'=>'required|same:password'


        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'bạn chưa nhập tên của bạn',
            'email.required'=>'bạn chưa nhập email của bạn',
            'Birthday'=>'bạn chưa nhập ngày sinh',
            'username.required'=>'bạn chưa nhập tên đăng nhập',
            'username.min'=>'tên đăng nhập phải ít nhất 6 ký tự',
            'password.required'=>'bạn chưa nhập mật khẩu',
            'password.min'=>'mật khẩu phải ít nhất 8 ký tự',
            'password.max'=>'mật khẩu tối đa 32 ký tự',
            'passwordAgain.required'=>'bạn chưa nhập lại mật khẩu',
            'passwordAgain.same'=>'mật khẩu mật khẩu nhập lại không khớp'
        ];

    }
}
