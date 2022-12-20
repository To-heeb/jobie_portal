<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'name',
    ];

    use HasFactory;

    public static function updateIndustry($request)
    {
        $industryInfo = Industry::find($request->id);
        $industryInfo->name = $request->industry_name_edit;

        if ($industryInfo->save()) {
            return true;
        }
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
