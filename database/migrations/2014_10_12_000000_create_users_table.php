<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('job_category_id')->nullable();
            $table->integer('job_sub_category_id')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('cv')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('company_id')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('headline')->nullable();
            $table->string('dob')->nullable();
            $table->text('about')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->integer('status')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
