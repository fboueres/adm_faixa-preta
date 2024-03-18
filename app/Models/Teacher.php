<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasUuids;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cpf',
        'full_name',
        'gender',
        'birth_date',
        'rank',
        
        'email',
        'phone_number',
    ];

    /**
     * Get the student enrollment date.
     */
    protected function birthDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('d/m/y', strtotime($value)),
        );
    }

    /**
     * Get the lessons of this teacher.
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
