<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'role'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Поле обязательно для заполнения!',
            'name.string'=>'Поле должно иметь строчный тип!',
            'email.required'=>'Поле обязательно для заполнения!',
            'email.string'=>'Поле должно иметь строчный тип!',
            'email.email'=>'Поле должно быть электронной почтой!',
            'email.unique'=>'Email должно быть уникальным!',
        ];
    }

}
