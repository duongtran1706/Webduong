<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'Tilte'=>'required',
            'ContentPost'=>'required',


        ];
    }
    public function messages()
    {
        return [
            'Tilte.required'=>'bạn chưa nhập Tiêu đề',
            'ContentPost.required'=>'bạn chưa nhập email của bạn',
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
