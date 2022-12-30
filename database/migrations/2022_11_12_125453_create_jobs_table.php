<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('level', ['entry_level', 'internship', 'graduate_trainee', 'mid_level', 'mid_senior_level', 'senior', 'director', 'executive']);  //entry_level, internship, graduate_trainee, mid_level, mid_senior_level, senior, director, executive 
            $table->string('tags');
            $table->enum('location_type', ['remote', 'on_site', 'hybrid']); //'remote', 'on_site', 'hybrid'
            $table->enum('type', ['freelance', 'contract', 'fulltime', 'parttime']); //freelance, contract, fulltime, parttime 
            $table->enum('status',  ['pending', 'live',]); //pending, live
            $table->enum('salary_status',  ['confidential', 'public',]); //confidential, public
            $table->text('custom_question')->nullable();
            $table->integer('company_id');
            $table->integer('job_category_id');
            $table->integer('job_sub_category_id');
            $table->integer('salary_range_id');
            $table->text('summary');
            $table->text('description');
            $table->date('start_range');
            $table->date('end_range');
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
        Schema::dropIfExists('jobs');
    }
}
