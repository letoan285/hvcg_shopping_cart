<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name' => 'required|max:255',
            'status' => 'required',
            'parent_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ten khong de trong',
            'name.max' => 'Ten khong dai qua 255 ky tu',
            'status.required' => 'Vui long chon trang thai',
            'parent_id.required' => 'Vui long chon danh muc cha'
        ];
    }
}
