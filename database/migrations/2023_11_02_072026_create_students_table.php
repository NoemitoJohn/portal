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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('id_number')->unique();
            $table->string('password');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('m_name');
            $table->string('ex_name');
            $table->string('gender');
            $table->date('birthday');
            $table->string('civil_status');
            $table->string('religion');
            $table->string('provice');
            $table->string('city');
            $table->string('barangay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
