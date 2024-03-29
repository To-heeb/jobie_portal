<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Employer;
use App\Models\Industry;
use App\Models\JobCategory;
use App\Models\JobSubCategory;
use App\Models\SalaryRange;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Admin::factory(2)->create();
        Industry::factory(10)->create();
        JobCategory::factory()->create();
        JobSubCategory::factory()->create();
        SalaryRange::factory()->create();
        Company::factory(8)->create();
        Job::factory(2)->create();


        // Remove all
        User::create([
            'first_name' => 'Toheeb',
            'last_name' => 'Oyekola',
            'email' => 'toheeb.olawale.to23@gmail.com',
            'password' =>  Hash::make(env('APP_PASS')),
        ]);
        Admin::create([
            'first_name' => 'Toheeb',
            'last_name' => 'Oyekola',
            'email' => 'toheeb.olawale.to23@gmail.com',
            'password' =>  Hash::make(env('APP_PASS')),
        ]);
        Employer::create([
            'first_name' => 'Toheeb',
            'last_name' => 'Oyekola',
            'email' => 'toheeb.olawale.to23@gmail.com',
            'password' =>  Hash::make(env('APP_PASS')),
        ]);
    }
}
