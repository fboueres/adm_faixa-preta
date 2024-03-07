<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CPF implements ValidationRule
{
    /**
     * @var array|string[]
     */
    private array $invalidCpf = [
        '00000000000',
        '11111111111',
        '22222222222',
        '33333333333',
        '44444444444',
        '55555555555',
        '66666666666',
        '77777777777',
        '88888888888',
        '99999999999',
    ];

    /**
     * @var array
     */
    private array $cpf;
    
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $this->cpf = str_split($value);
        
        if (!in_array($value, $this->invalidCpf) && count($this->cpf) == 11) {
            $firstDigit = $this->calculateDigit(10, 2);
            $secondDigit = $this->calculateDigit(11, 1);
            
            if (!$this->isValid($firstDigit, $secondDigit))
            $fail('The :attribute is invalid.');
        }
        else {
            $fail('The :attribute is invalid.');
        }
    }

    private function calculateDigit(int $aux, int $loop): int
    {
        $result = 0;
        $loop = count($this->cpf) - $loop;

        for ($i = 0; $i < $loop; $i++) {
            $result += (int) $this->cpf[$i] * $aux--;
        }

        $result = ($result * 10) % 11;

        return $result >= 10 ? 0 : $result;
    }

    private function isValid(int $firstDigit, int $secondDigit): bool
    {
        return (int) $this->cpf[9] === $firstDigit && (int) $this->cpf[10] == $secondDigit;
    }

}
