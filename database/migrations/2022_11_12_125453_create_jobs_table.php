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
            $table->string('level');
            $table->string('tags');
            $table->string('location_type'); //'remote', 'on_site', 'hybrid'
            $table->string('type'); //freelance, contract, fulltime, parttime 
            $table->string('status'); //pending, on-hold, accepted, or rejected
            $table->integer('company_id');
            $table->integer('job_category_id');
            $table->integer('job_sub_category_id');
            $table->text('summary');
            $table->text('description');
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
