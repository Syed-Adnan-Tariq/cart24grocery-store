<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRecipe extends FormRequest
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
            'title' => 'required|string|max:255',
            'imagePath' => 'required|mimes:jpeg,bmp,png',
            'vpath' => 'required|url',
            'ingredients' => 'required|string',
            'cmethod' => 'required|string',
            'serve' => 'required|numeric',
            'ctime' => 'required|numeric',
            'product_id' => 'required|numeric',
        ];
    }
}
