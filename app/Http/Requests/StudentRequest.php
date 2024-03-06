<?php

namespace App\Http\Requests;

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
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student' => 'required|array|min:7|max:8',
            'student.cpf' => 'required|string',
            'student.full_name' => 'required|string',
            'student.birth_date' => 'required|date',
            'student.gender' => ['required', Rule::in(['M', 'F'])],
            'student.rank' => 'required|string',
            'student.enrollment_date' => 'required|date',
            'student.email' => 'required|email|required_without:phone_number',
            'student.phone_number' => 'required|string|required_without:email',

            'address' => 'required|array|size:5',
            'address.cep' => 'required|string',
            'address.rua' => 'required|string',
            'address.bairro' => 'required|string',
            'address.quadra' => 'required|string',
            'address.numero' => 'required|string',

            'guardians' => 'required|array|size:2',
            'guardians.*' => 'required|array',
            'guardians.*.cpf' => 'required|string',
            'guardians.*.full_name' => 'required|string',
            'guardians.*.affiliation' => 'required|string',
        ];
    }
}
