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
            $table->enum('status',  ['live', 'pending']); //pending, live
            $table->enum('salary_status',  ['confidential', 'public']); //confidential, public
            $table->enum('cover_letter_status',  ['yes', 'no']);
            $table->text('custom_question')->nullable();
            $table->foreignId('company_id')->constrained()->onUpdate('cascade');
            $table->foreignId('job_category_id')->constrained()->onUpdate('cascade');
            $table->foreignId('job_sub_category_id')->constrained()->onUpdate('cascade');
            $table->foreignId('salary_range_id')->constrained()->onUpdate('cascade');
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
