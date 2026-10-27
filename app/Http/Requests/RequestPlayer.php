<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class RequestPlayer extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'age' => 'required|integer|max:100',
            'national' => 'required|max:255',
            'position' => 'required|max:255',
            'salary' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'max' => ':attribute: không được quá ký tự',
            'name' => ':attribute: không được để trống',
            'age' => ':attribute: không được để trống',
            'age.integer' => ':attribute: phải là số tư nhiên',
            'national' => ':attribute: không được để trống',
            'position' => ':attribute: không được để trống',
            'salary' => ':attribute: không được để trống',

        ];
    }
}
