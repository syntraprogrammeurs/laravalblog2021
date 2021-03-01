<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsCreateRequest extends FormRequest
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
            //
            'title' =>'required',
            'category_id' => 'required',
            //'photo_id'=>'required',
            'body'=> 'required'
        ];
    }
    public function messages(){
        return[
            'title.required'=> 'Title is required',
            'category_id.required'=>'Category name is required',
            //'photo_id.required'=>'Photo is required',
            'body.required'=>'Description is required',
        ];

    }
}
