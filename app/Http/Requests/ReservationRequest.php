<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'reservation_email' => 'required',
            'reservation_name' => 'required',
            'reservation_phone' => 'required',
            'reservation_course_id' => 'required',
            'reservation_message' => 'required',
            'reservation_time' => 'required',
        ];
    }
}
