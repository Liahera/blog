<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email'=>'required|email',
            'name'=>'required',
             'subject'=>'required|min:5|max:50',
              'massage'=>'min:5|max:1000'
            ];


    }
    public function attributes()
    {
        return [
            'name'=>'Имя'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>' Поле имя является обезательным',
            'email.required'=>' Поле email является обезательным',
            'subject.required'=>' Поле тема является обезательным',
            'message.required'=>' Поле сообщение является обезательным'
        ];
    }
}
