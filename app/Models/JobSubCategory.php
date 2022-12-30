<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSubCategory extends Model
{
    protected $fillable = [
        'name',
        'job_category_id'
    ];

    use HasFactory;

    public static function updateJobSubCategory($request)
    {
        $subCategoryInfo = JobSubCategory::find($request->id);
        $subCategoryInfo->name = $request->sub_category_name_edit;
        $subCategoryInfo->job_category_id = $request->job_category_id_edit;

        if ($subCategoryInfo->save()) {
            return true;
        }
    }

    public function job_category()
    {
        return $this->belongsTo(JobCategory::class);
    }

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
