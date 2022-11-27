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
        'industry',
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
}
