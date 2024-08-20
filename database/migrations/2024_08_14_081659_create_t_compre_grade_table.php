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
        Schema::create('t_compre_grade', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDENT')->nullable()->index('applicantid');
            $table->integer('COURSE')->nullable()->index('course');
            $table->string('RESULT', 100)->nullable();
            $table->date('DATE_EXAM')->nullable();
            $table->dateTime('DATE_ADDED')->nullable();
            $table->integer('ENCODED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_compre_grade');
    }
};
