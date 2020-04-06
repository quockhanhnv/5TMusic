<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCourseRequest extends FormRequest
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
            'course_name'          => 'required|max:190|min:3|unique:products,pro_name,'.$this->id,
            'course_price'         => 'required',
            'course_description'   => 'required',
            'course_category_id'   => 'required',
            'course_content'       => 'required',
        ];
    }
}
