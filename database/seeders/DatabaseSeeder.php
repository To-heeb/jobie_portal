<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use App\Models\Admin;
use App\Models\Company;
use App\Models\Industry;
use Illuminate\Database\Seeder;

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
        Job::factory(2)->create();
        Company::factory(8)->create();
        Industry::factory(10)->create();
    }
}
