<?php

namespace App\Http\Requests\Artist;

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
            'name' => 'required|string|max:255',
            'resume' => 'required|string|max:255',
            'history' => 'nullable|string|max:600',
            'has_logo' => 'required|boolean',
            'logo_path' => 'nullable|string|max:255',
            'account' => 'nullable|string|max:255',
            'type' => 'required|in:band,solo',
            'number_of_members' => 'nullable|integer',
        ];
    }
}
