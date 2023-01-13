<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'headline',
        'dob',
        'about',
        'city',
        'zip',
        'country',
        'country_code',
        'phone_number',
        'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function company_reviews()
    {
        return $this->hasMany(CompanyReview::class);
    }

    public function cover_letters()
    {
        return $this->hasMany(CoverLetter::class);
    }

    public function resumes()
    {
        return $this->hasMany(Resume::class);
    }

    public function education_details()
    {
        return $this->hasMany(EducationDetail::class);
    }

    public function expereince_details()
    {
        return $this->hasMany(ExperienceDetail::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skill');
    }
}
