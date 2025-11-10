<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id('id');
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_contact');
            $table->string('job_title');
            $table->string('job_type');
            $table->string('job_category');
            $table->string('job_description');
            $table->string('job_responsibility')->nullable();
            $table->string('job_skills');
            $table->string('job_experience')->nullable();
            $table->string('job_qualification');
            $table->string('job_salary');
            $table->string('job_perks');
            $table->string('job_city');
            $table->string('job_state');
            $table->string('job_country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
