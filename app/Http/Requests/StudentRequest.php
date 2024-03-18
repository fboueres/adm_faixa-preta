<?php

namespace App\Http\Requests;

use Closure;
use App\Rules\CPF;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
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

        $guardians = [];
        foreach ($this->input('guardians') as $guardian) {
            $guardian['cpf'] = preg_replace('/[^0-9]/', '', $guardian['cpf']);
            $guardians[] = $guardian;
        }

        $this->merge(['guardians' => $guardians]);
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
            'student.email' => 'required_without:student.phone_number|email',
            'student.phone_number' => 'required_without:student.email|string|size:11',

            'address' => ['nullable', 'array', 'size:5', function (string $attribute, mixed $value, Closure $fail) {
                $empty_fields_count = collect($value)->filter(fn (mixed $value) => empty($value))->count();
                
                if ($empty_fields_count != 5 && $empty_fields_count != 0)
                    $fail("The :attribute can't be partially filled.");

                if ($empty_fields_count == 0) {
                    $validator = Validator::make($value, [
                        'cep' => 'string|size:8',
                        'bairro' => 'string',
                        'rua' => 'string',
                        'quadra' => 'string',
                        'numero' => 'string',
                    ]);

                    if ($validator->fails())
                        $fail("The :attribute can't be partially filled.");
                }
            }],

            'guardians' => 'nullable|array|min:1|max:2',
            'guardians.*' => ['nullable','array','size:3', function (string $attribute, mixed $value, Closure $fail) {
                $empty_fields_count = collect($value)->filter(fn (mixed $value) => empty($value))->count();
                
                if ($empty_fields_count != 3 && $empty_fields_count != 0)
                    $fail("The :attribute can't be partially filled.");

                if ($empty_fields_count == 0) {
                    $validator = Validator::make($value, [
                        'cpf' => ['string', new CPF],
                        'full_name' => 'string',
                        'affiliation' => 'string',
                    ]);

                    if ($validator->fails())
                        $fail("Validation failed.");
                }
            }],
        ];
    }
}
