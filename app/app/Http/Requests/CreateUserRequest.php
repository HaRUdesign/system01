<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'user_familyname' => 'required|max:20',
            'user_firstname' => 'required|max:20',
            'user_kana_familyname' => 'required|max:20',
            'user_kana_firstname' => 'required|max:20',
            'user_sex' =>'required',
            'user_mail' => 'required|email|unique:users',
            'user_pass' => 'required|between:8,20|regex:/^[a-zA-Z0-9]+$/', //半角英数字のみ
            'user_tel' =>'required',//数字のみ
            'user_address' =>'required',
            'user_birthday_year' => 'required|max:4',
            'user_birthday_month' => 'required|max:2',
            'user_birthday_day' => 'required|max:2',
            'user_newsletter'=>'required',
            'user_comment' => 'max:5000'
        ];
    }
}
