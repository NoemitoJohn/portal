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
        Schema::create('endrollments', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->year('year');
            $table->integer('subject_id');
            $table->boolean('aproved')->default(false);
            $table->enum('semester',['1st', '2nd'])->default('1st');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('endrollments');
    }
};
