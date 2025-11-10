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
        Schema::create('user_registrations', function (Blueprint $table) {
            $table->id('id');
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->string('role');
            $table->string('phone');
            $table->string('city');
            $table->string('qualification');
            $table->string('experience');
            $table->string('languages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_registrations');
    }
};
