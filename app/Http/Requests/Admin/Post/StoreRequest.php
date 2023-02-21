<?php

namespace App\Http\Requests\Admin\Post;

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
            'title'=>'required|string',
            'content'=>'required|string',
            'preview_image'=>'required|file',
            'main_image'=>'required|file',
            'category_id'=>'required',
            'tag_id'=>'required',
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Это поле обязательно для заполнения!',
            'title.string'=>'Это поле должно быть стракой!',
            'content.required'=>'Это поле обязательно для заполнения!',
            'content.string'=>'Это поле должно быть стракой!',
            'preview_image.required'=>'Это поле обязательно для заполнения!',
            'preview_image.file'=>'Это поле должно быть файлом!',
            'main_image.required'=>'Это поле обязательно для заполнения!',
            'main_image.file'=>'Это поле должно быть файлом!',
            'category_id.required'=>'Это поле обязательно для заполнения!',
            'tag_id.required'=>'Это поле обязательно для заполнения!',
        ];
    }

}
