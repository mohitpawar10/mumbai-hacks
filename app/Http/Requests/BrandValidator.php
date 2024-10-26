<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'      => ['required', 'string', 'max:255'],
            'mission'   => ['required', 'string', 'max:255'],
            'vision'    => ['required', 'string', 'max:255'],
            'values'    => ['required', 'string', 'max:255'],
            'logo'      => ['required', 'url', 'max:255'],
            'color_palate' => ['required', 'string', 'max:255'],
        ];
    }
}
