<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'phone_number',
        'profile_photo'
    ];

    public static function updateAdmin($request)
    {
        //dd($request);
        $admin = Admin::find(Auth::id());
        $admin->email  = $request->email;
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;

        if (isset($request->password)) {
            $admin->password = $request->password;
        }

        if (isset($request->profile_photo)) {
            $admin->profile_photo = $request->profile_photo;
        }

        // if (isset($request->phone_number)) {
        //     $admin->phone_number = $request->phone_number;
        // }

        if ($admin->save()) return true;
    }
}
