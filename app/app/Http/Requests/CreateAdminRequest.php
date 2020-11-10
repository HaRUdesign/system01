<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAdminRequest extends FormRequest
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
            'admin_familyname' => 'required|max:20',
            'admin_firstname' => 'required|max:20',
            'admin_kana_familyname' => 'required|max:20',
            'admin_kana_firstname' => 'required|max:20',
            'admin_mail' => 'required|email|unique:admins',
            'admin_pass' => 'required|between:8,20|regex:/^[a-zA-Z0-9]+$/', //半角英数字のみ
            'admin_birthday_year' => 'required|max:4',
            'admin_birthday_month' => 'required|max:2',
            'admin_birthday_day' => 'required|max:2'
        ];
    }
}
