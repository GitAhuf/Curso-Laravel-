<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        if(request()->routeIs('posts.store')){
            $slug = 'required|unique:posts' ;
        } else {
            $slug = 'required|unique:posts,slug,' . $this->post->id;
        }
        return [
            'slug'        => $slug,
            'body'        => 'required',
            'title'       => 'required',
            'user_id'     => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id'
            //
        ];
    }
}
