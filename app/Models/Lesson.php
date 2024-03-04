<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
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
        'name',
        'start',
        'end',
        'days_of_the_week',
        'observations',
    ];

    /**
     * Get the teachers of this lesson.
     */
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }

    /**
     * Get the students of this lesson.
     */
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    /**
     * Get the records of this lesson.
     */
    public function records()
    {
        return $this->hasMany(LessonRecord::class);
    }
}
