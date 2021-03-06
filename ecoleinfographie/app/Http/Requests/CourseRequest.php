<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CourseRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'title'            => 'required|min:2|max:255',
            'slug'             => 'unique:courses,slug,' . \Request::get('id'),
            'orientation'      => 'required',
            'duration'         => 'required|numeric',
            'ects'             => 'required|numeric',
            'bloc'             => 'required|numeric',
            'quadrimester'     => 'required',
            'shortdescription' => 'required|min:2|max:180',
            'description'      => 'required',
            'objectives'       => 'required',
            'image'            => 'required'
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
