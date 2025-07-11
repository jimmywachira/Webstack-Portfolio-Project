<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
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
            //
                 // Define your validation rules here, e.g.:
            // 'title' => ['required', 'string', 'max:255'],
            // 'description' => ['required', 'string'],
            // 'salary' => ['nullable', 'string', 'max:255'],
            // 'location' => ['required', 'string', 'max:255'],
            // 'schedule' => ['required', 'string', 'max:255'], // e.g., 'Full-time'
            // 'url' => ['required', 'url'],
            // 'tags' => ['nullable', 'string'], // If tags are comma-separated
            // 'featured' => ['boolean']
        ];
    }
}
