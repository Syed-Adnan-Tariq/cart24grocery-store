<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStore extends FormRequest
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
            'title' => 'required|string',
            'imagePath' => 'required|mimes:jpeg,bmp,png',
            'price' => 'required|numeric',
            'discount' => 'required|numeric',
            'category_id' => 'required|numeric',
        ];
    }
}
