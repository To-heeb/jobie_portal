<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->restrictOnDelete();
            $table->foreignId('resume_id')->constrained()->onUpdate('cascade')->restrictOnDelete();
            $table->foreignId('cover_letter_id')->nullable()->constrained()->onUpdate('cascade')->restrictOnDelete();
            $table->foreignId('job_id')->constrained()->onUpdate('cascade')->restrictOnDelete();
            $table->text('custom_response')->nullable();
            $table->enum('status',  ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('message')->nullable();
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
        Schema::dropIfExists('applications');
    }
}
