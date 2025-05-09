<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable(); // New: Phone number field
            $table->string('gender')->nullable(); // New: Gender field
            $table->date('birthdate')->nullable(); // New: Birthdate field
            $table->text('bio')->nullable();
            $table->string('avatar')->nullable(); 
            $table->boolean('status')->default(true); 
            $table->string('position')->nullable(); // Front-end, Back-end, Data Engineer, etc.
            $table->string('level')->nullable(); // Junior, Mid-level, Senior
            $table->text('skills')->nullable(); // Store skills as plain text (comma-separated)
            $table->text('social')->nullable(); // Store social media links as comma-separated text
            $table->integer('experience_years')->nullable(); // Years of experience
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}