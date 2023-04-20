<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'slug'        => 'required|unique:posts',
            'body'        => 'required',
            'title'       => 'required',
            'user_id'     => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id'
            //
        ];
    }

    public function messages(){
        return[
            'title.required' => 'A name is required jajaj',

        ];
    }

    public function attributes()
    {
        return [
            'title' => 'name',
        ];
    }
}