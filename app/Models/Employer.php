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
        'last_name'
    ];


    public static function updateEmployerCompany(int $company_id, $request)
    {
        $employer = Employer::find(Auth::id());
        $employer->company_id = $company_id;
        $employer->employer_type = $request->employer_type;
        if ($employer->employer_type == 'employee')  $employer->position_in_company = $request->position_in_company;

        if ($employer->save()) return true;
    }


    public function company()
    {
        return $this->hasOne(Company::class);
    }
}
