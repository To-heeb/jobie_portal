<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryRange extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_range',
        'end_range',
    ];


    public static function updateSalaryRange($request)
    {
        $salaryInfo = SalaryRange::find($request->id);
        $salaryInfo->start_range = $request->start_range_edit;
        $salaryInfo->end_range = $request->end_range_edit;

        if ($salaryInfo->save()) {
            return true;
        }
    }
}
