<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|unique:products',
            'slug' => 'required|min:3|max:255|unique:products',
            'brand_id' => 'required',
            'size_id' => 'required',
            'block_count' => 'required',
            'image' => 'required',
            'first_price' => 'required',
        ];
    }
}
