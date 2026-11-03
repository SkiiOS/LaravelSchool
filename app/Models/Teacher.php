<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'niy',
        'nly',
        'subject_id',
        'start_date',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function getNlyAttribute()
    {
        return $this->attributes['nly'] ?? $this->attributes['niy'];
    }

    public function getNiyAttribute()
    {
        return $this->attributes['niy'] ?? $this->attributes['nly'];
    }
}
