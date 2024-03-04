<?php

namespace App\Models;

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
