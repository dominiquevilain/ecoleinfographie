<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'        => 'required|min:2|max:255',
            'slug'         => 'unique:articles,slug,' . \Request::get('id'),
            'orientation'  => 'required',
            'image'        => 'required',
            'introduction' => 'required|min:50',
            'content'      => 'required|min:255',
            'date'         => 'required|date',
            'status'       => 'required',
            'category_id'  => 'required',
            'author_id'    => 'required_if:teacher_id,""',
            'teacher_id'   => 'required_if:author_id,""'
        ];
    }
    
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }
    
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
