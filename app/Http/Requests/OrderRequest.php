<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'address' => 'required',
            'phone' => 'required|numeric|min:0',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập Họ và tên',
            'email.required'  => 'Vui lòng nhập Email',
            'phone.required'  => 'Vui lòng nhập số điện thoại',
            'address.required'  => 'Vui lòng nhập Địa chỉ',
        ];
    }
}
