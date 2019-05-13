<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TinSuaRequest extends FormRequest
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
            'tieuDe' => 'required',
            'tomTat' => 'required',
            'keyword' => 'required',
            'date' => 'required',
            'noiDung' => 'required',
            'maLoaiTin' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'tieuDe.required' => 'Tiêu đề không hợp lệ',
            'tomTat.required' => 'Tóm tắt không hợp lệ',
            'keyword.required' => 'Keyword không hợp lệ',
            'date.required' => 'Ngày không hợp lệ',
            'noiDung.required' => 'Bạn chưa nhập nội dung',
            'maLoaiTin.required' => 'Bạn chưa chọn mã loại tin',
        ];
    }
}
