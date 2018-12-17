<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'id_type' => 'required',
            'image' => 'required|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập Tên sản phẩm',
            'id_type.required' => 'Vui lòng nhập loại sản phẩm',
            'image.max'  => 'Kích thước file quá lớn',
        ];
    }
}
