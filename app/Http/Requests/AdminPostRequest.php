<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostRequest extends FormRequest
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
        $rules = [
            'post_name'          => 'required|max:190|min:3|unique:posts,post_name,'.$this->id,
            'post_description'   => 'required',
            'post_avatar'   => 'required',
            'post_content'       => 'required',
        ];

        if($this->route()->getName() == 'admin.post.update') {
            $rules = array_replace($rules, [
                'post_avatar' => 'nullable|mimes:jpg,jpeg,png,gif'
            ]);
        }

        return $rules;
    }
}
