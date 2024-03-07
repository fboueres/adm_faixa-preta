<?php

namespace App\Http\Requests;

use App\Rules\CPF;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
            'student' => array_merge($this->student, [
                'cpf' => preg_replace('/[^0-9]/', '', $this->student['cpf']),
                'phone_number' => preg_replace('/[^0-9]/', '', $this->student['phone_number']),
            ]),

            'address' => array_merge($this->address, [
                'cep' => preg_replace('/[^0-9]/', '', $this->address['cep']),
            ])
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
            'student' => 'required|array|min:7|max:8',
            'student.cpf' => ['required', 'string', new CPF],
            'student.full_name' => 'required|string',
            'student.birth_date' => 'required|date',
            'student.gender' => ['required', Rule::in(['M', 'F'])],
            'student.rank' => 'required|string',
            'student.enrollment_date' => 'required|date',
            // 'student.email' => 'required_without:phone_number|email',
            'student.email' => 'nullable|email',
            // 'student.phone_number' => 'required_without:email|string|size:11',
            'student.phone_number' => 'nullable|string|size:11',

            'address' => 'required|array|size:5',
            'address.cep' => 'required|string|size:8',
            'address.rua' => 'required|string',
            'address.bairro' => 'required|string',
            'address.quadra' => 'required|string',
            'address.numero' => 'required|string',

            // 'guardians' => 'nullable|array|min:1|max:2',
            // 'guardians.*' => 'nullable|array|size:3',
            // 'guardians.*.cpf' => ['nullable', 'string', new CPF],
            // 'guardians.*.full_name' => 'nullable|string',
            // 'guardians.*.affiliation' => 'nullable|string',
        ];
    }
}
