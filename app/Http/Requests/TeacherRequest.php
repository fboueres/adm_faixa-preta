<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'teacher' => array_merge($this->teacher, [
                'cpf' => preg_replace('/[^0-9]/', '', $this->teacher['cpf']),
                'phone_number' => preg_replace('/[^0-9]/', '', $this->teacher['phone_number']),
            ]),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'teacher.cpf' => 'required|string',
            'teacher.full_name' => 'required|string',
            'teacher.birth_date' => 'required|string',
            'teacher.gender' => ['required', Rule::in(['M', 'F'])],
            'teacher.rank' => 'required|string',
            'teacher.email' => 'required|email',
            'teacher.phone_number' => 'required|string',
        ];
    }
}
