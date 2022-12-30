<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title',
        'job_category_id',
        'job_sub_category_id',
        'company_id',
        'type',
        'job_status',
        'location_type',
        'tags',
        'level',
        'salary_range_id',
        'salary_status',
        'summary',
        'description',
        'start_range',
        'end_range',
        'custom_question',
    ];

    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        //dd($filters['tag']);
        if ($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function job_sub_category()
    {
        return $this->belongsTo(JobSubCategory::class);
    }

    public function salary_range()
    {
        return $this->belongsTo(SalaryRange::class);
    }
}
