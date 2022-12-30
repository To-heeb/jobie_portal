<?php

namespace App\Models;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'profile_photo',
        'phone_number'
    ];


    public static function updateEmployerCompany(int $company_id, $request)
    {
        $employer = Employer::find(Auth::id());
        $employer->company_id = $company_id;
        $employer->employer_type = $request->employer_type;
        if ($employer->employer_type == 'employee')  $employer->position_in_company = $request->position_in_company;

        if ($employer->save()) return true;
    }

    public static function updateEmployer($request)
    {
        //dd($request);
        $employer = Employer::find(Auth::id());
        $employer->email  = $request->email;
        $employer->first_name = $request->first_name;
        $employer->last_name = $request->last_name;

        if (isset($request->password)) {
            $employer->password = $request->password;
        }

        if (isset($request->profile_photo)) {
            $employer->profile_photo = $request->profile_photo;
        }

        // if (isset($request->phone_number)) {
        //     $admin->phone_number = $request->phone_number;
        // }

        if ($employer->save()) return true;
    }

    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
