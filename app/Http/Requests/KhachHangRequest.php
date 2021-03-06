<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class khachHangRequest extends FormRequest
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
            'tenKH' => 'required',
            'img' => 'required',
            'diaChi' => 'required',
            'danhGia' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'tenKH.required' => 'Tên khách hàng không hợp lệ',
            'img.required' => 'Hình ảnh không hợp lệ',
            'diaChi.required' => 'Địa chỉ không hợp lệ',
            'danhGia.required' => 'Đánh giá không hợp lệ',

        ];
    }
}
