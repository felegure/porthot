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
            'name' => 'bail|required|between:5,30|alpha',
            'mail' => 'bail|required|email',
            'subject' => 'bail|required|between:3,50|alpha',
            'message' => 'bail|required|max:250'
        ];
    }
}
