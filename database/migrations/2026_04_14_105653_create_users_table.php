<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('mobile_number')->unique();
            $table->string('profile_picture')->nullable();
            $table->string('location')->nullable();
            $table->enum('role', ['student', 'independent_grower', 'program_coordinator', 'admin']);
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->timestamp('consent_given_at')->nullable();
            $table->string('consent_version')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->softDeletes(); 
            $table->string('preferred_language', 10)->default('en');
            $table->string('timezone')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};