<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_details', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->string('company_name');
            $table->string('company_mail');
            $table->string('employment_type')->nullable();
            $table->string('location')->nullable();
            $table->enum('location_type', ['remote', 'on_site', 'hybrid'])->nullable();
            $table->text('description')->nullable();
            $table->string('status', ['pending', 'approved']);
            $table->string('start_month');
            $table->year('start_year');
            $table->string('end_month');
            $table->year('end_year');
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
        Schema::dropIfExists('experience_details');
    }
}
