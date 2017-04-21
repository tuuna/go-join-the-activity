<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityApplyRequest extends FormRequest
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
     * there can be confused that how can i deal with the phone number
     * @return array
     */
    public function rules()
    {
        return [
            'name' => max:6 | requied,
            'phone_number' => required | alpha_num:11,
            'email' => required | email,
            'student_number' => required
        ];
    }
}
