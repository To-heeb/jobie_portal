<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{



    protected $fillable = [
        'name',
        'email',
        'website_link',
        'twitter_link',
        'facebook_link',
        'instagram_link',
        'industry_id',
        'employer_id',
        'no_of_employees',
        'company_logo',
        'address',
        'city',
        'state',
        'country',
        'phone_number',
        'about'
    ];
    use HasFactory;


    public static function updateCompany($request)
    {

        //eloquence
        //dd($request);
        $companyInfo = Company::find($request->id);
        $companyInfo->name = $request->name;
        $companyInfo->email = $request->email;
        $companyInfo->phone_number = $request->phone_number;
        $companyInfo->country = $request->country;
        $companyInfo->state = $request->state;
        $companyInfo->city = $request->city;
        $companyInfo->address = $request->address;
        $companyInfo->website_link = $request->website_link;
        $companyInfo->twitter_link = $request->twitter_link;
        $companyInfo->facebook_link = $request->facebook_link;
        $companyInfo->instagram_link = $request->instagram_link;
        $companyInfo->industry = $request->industry;
        $companyInfo->no_of_employees = $request->no_of_employees;
        $companyInfo->about = $request->about;

        if (!empty($request->company_logo)) {
            $companyInfo->company_logo = $request->company_logo;
        }

        if ($companyInfo->save()) {
            return true;
        }
    }


    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
