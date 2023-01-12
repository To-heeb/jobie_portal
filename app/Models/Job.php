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
        'cover_letter_status',
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


    public static function updateJob($request)
    {

        //eloquence
        //dd($request);
        $jobInfo = Job::find($request->id);
        $jobInfo->title = $request->title;
        $jobInfo->job_category_id = $request->job_category_id;
        $jobInfo->job_sub_category_id = $request->job_sub_category_id;
        $jobInfo->company_id = $request->company_id;
        $jobInfo->type = $request->type;
        $jobInfo->status = $request->status;
        $jobInfo->location_type = $request->location_type;
        $jobInfo->tags = $request->tags;
        $jobInfo->level = $request->level;
        $jobInfo->cover_letter_status = $request->cover_letter_status;
        $jobInfo->salary_range_id = $request->salary_range_id;
        $jobInfo->salary_status = $request->salary_status;
        $jobInfo->summary = $request->summary;
        $jobInfo->description = $request->description;
        $jobInfo->start_range = $request->start_range;
        $jobInfo->end_range = $request->end_range;
        $jobInfo->custom_question = $request->custom_question;

        if ($jobInfo->save()) {
            return true;
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
