<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
        'birth_date',
        'gender',
        'rank',
        'enrollment_date',
        'email',
        'phone_number',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['address'];
    
    /**
     * Get the student phone number.
     */
    protected function phoneNumber(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => sprintf('(%s) %s %s-%s', substr($value, 0, 2), substr($value, 2, 1),substr($value, 3, 4), substr($value, 7)),

        );
    }

    /**
     * Get the student enrollment date.
     */
    protected function enrollmentDate(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('d/m/y', strtotime($value)),
        );
    }
    
    /**
     * Get the address related to the student.
     */
    public function address()
    {
        return $this->hasOne(Address::class, 'student_uuid', 'uuid');
    }

    /**
     * Get the legal guardians of the student.
     */
    public function guardians()
    {
        return $this->hasMany(Guardian::class, 'student_uuid', 'uuid');
    }

    /**
     * Get the lessons of this student.
     */
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
