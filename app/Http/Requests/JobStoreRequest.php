<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'employer' => ['required','string','max:255'],
            'positions' => ['required','numeric'],
            'description' => ['required','string','max:255'],
            'Category_id' => ['required','numeric']
        ];
    }

}
