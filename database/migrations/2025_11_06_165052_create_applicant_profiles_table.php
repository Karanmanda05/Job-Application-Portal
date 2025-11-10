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
        Schema::create('applicant_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_contact');
            $table->string('applicant_dob');
            $table->string('applicant_gender');
            $table->string('applicant_address');
            $table->string('applicant_qualification');
            $table->string('applicant_experience')->nullable();
            $table->string('applicant_skills')->nullable();
            $table->string('applicant_photo')->nullable();
            $table->string('applicant_resume');
            $table->string('applicant_linkedin');
            $table->string('applicant_github');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_profiles');
    }
};
