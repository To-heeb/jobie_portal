<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceDetail extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'company_name',
        'company_mail',
        'employment_type',
        'location',
        'location_type',
        'description',
        'status',
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
