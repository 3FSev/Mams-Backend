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
        Schema::create('t_application_graduation_init', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('student_id', 100)->nullable();
            $table->string('appstatus', 10)->nullable();
            $table->string('alumnistatus', 100)->nullable();
            $table->string('issostatus', 100)->nullable();
            $table->date('dateapplied')->nullable();
            $table->date('datealumnitag')->nullable();
            $table->date('dateissotag')->nullable();
            $table->date('datesubmitted')->nullable();
            $table->string('SY', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_application_graduation_init');
    }
};
