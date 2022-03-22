<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationrequest extends FormRequest
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
            'name' => 'required|unique:fournitures',
            'description' => 'required',
            'small_description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image1' => 'required|mimes:jpg,png,jpeg|max:5048',
            'image2' => 'required|mimes:jpg,png,jpeg|max:5048',
            'image3' => 'required|mimes:jpg,png,jpeg|max:5048'
        ];
    }
}
