<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:3|max:255',
            'username_slug' => 'required|min:3|max:255',
            'user_phone_number' => 'required|min:7|max:10',
            'boss_name' => 'required|min:3|max:10',
            'boss_name_slug' => 'required|min:3|max:10',
            'boss_phone_number' => 'required|min:3|max:10',
        ];
    }
}
