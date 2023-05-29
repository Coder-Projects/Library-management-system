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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name')->nullable();
            $table->string('email')->unique()->always();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('role_id')->default(1)->nullable();
            $table->string('password')->always();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
