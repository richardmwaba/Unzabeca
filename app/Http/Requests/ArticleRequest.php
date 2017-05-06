<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            // validation rules
            'articleTitle' => 'required',
            'author' => 'required',
            'articleBody' => 'required',
            //'photo' => 'max:5000|mimes:jpeg,bmp,png'
        ];
    }
}
