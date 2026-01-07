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
        Schema::create('user_my', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('city', 255);
            $table->string('role', 255);
            $table->date('last_login');
            $table->foreignId('job_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_my');
    }
};
