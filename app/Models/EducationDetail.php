<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetail extends Model
{
    protected $fillable = [
        'user_id',
        'school_name',
        'degree',
        'course_of_study',
        'grade',
        'description',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
    ];

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
