<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sanphamrequest extends FormRequest
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
            'tenSP' => 'required',
            'title' => 'required',
            'description' => 'required',
            'keyword' => 'required',
            'gia' => 'required',
            'img' => 'required',
            'tomTat' => 'required',
            'MTSP' => 'required',
            'TSKT' => 'required',
            'maSP' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'tenSP.required' => 'Tên sản phẩm không hợp lệ',
            'title.required' => 'Title không hợp lệ',
            'description.required' => 'description không hợp lệ',
            'keyword.required' => 'keyword không hợp lệ',
            'gia.required' => 'Giá chưa hợp lệ',
            'tomTat.required' => 'Tóm tắt không hợp lệ',
            'MTSP.required' => 'Ban chua nhap mô tả sản phẩm',
            'TSKT.required' => 'Ban chua nhap thông số kĩ thuật',
            'maSP.required' => 'Ban chua chọn mã sản phẩm',
        ];
    }
}
