<?php

namespace App\Http\Requests\Album;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:albums',
            'description' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'year' => 'required|integer',
        ];
    }
}
