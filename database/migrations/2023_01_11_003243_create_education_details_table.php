<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->restrictOnDelete();
            $table->string('school_name');
            $table->string('degree')->nullable();
            $table->string('course_of_study')->nullable();
            $table->string('grade')->nullable();
            $table->text('description')->nullable();
            $table->string('start_month')->nullable();
            $table->year('start_year')->nullable();
            $table->string('end_month')->nullable();
            $table->year('end_year')->nullable();
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
        Schema::dropIfExists('education_details');
    }
}
