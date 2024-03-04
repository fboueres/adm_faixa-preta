<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
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
        'cep',
        'rua',
        'bairro',
        'quadra',
        'numero',
        'student_uuid',
    ];

    /**
     * Get the student related to this address.
     */
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_uuid', 'uuid');
    }
}