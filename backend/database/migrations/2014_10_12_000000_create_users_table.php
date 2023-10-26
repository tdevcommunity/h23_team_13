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
            $table->id();
            $table->string('email')->unique();
            $table->string('firstname');
                        $table->string('lastname');
                        $table->string('password');
                        $table->string('telephone');
                        $table->string('sex');
                        $table->string('role_id')->default(3);
                        $table->string('country')->nullable();
                        $table->string('adresse')->nullable();
                        $table->string('birthday')->nullable();
                        $table->string('fonction');
                        $table->string('avatar')->nullable();
                        $table->boolean('status')->default(1);
                        $table->text('cv_path')->nullable();
                        $table->text('skills')->nullable();
                        $table->timestamp('email_verified_at')->nullable();
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
