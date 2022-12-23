<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{

    protected $fillable = [
        'name',
    ];


    use HasFactory;

    public static function updateJobCategory($request)
    {
        $categoryInfo = JobCategory::find($request->id);
        $categoryInfo->name = $request->category_name_edit;

        if ($categoryInfo->save()) {
            return true;
        }
    }

    public function job_sub_categories()
    {
        return $this->hasMany(JobSubCategory::class);
    }
}
