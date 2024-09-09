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
        Schema::create('t_scholarship', function (Blueprint $table) {
            $table->id();
            $table->integer('STUDENT_ID')->nullable()->index('student_id');
            $table->integer('SCHOLAR_ID')->nullable();
            $table->string('OTHER')->nullable();
            $table->timestamp('DATE_SUBMITTED')->nullable();
            $table->integer('USERID')->nullable();
            $table->string('STATUS', 10)->nullable()->default('Active');
            $table->integer('EDITED_BY')->nullable();
            $table->timestamp('EDITED_DATE')->nullable();
            $table->string('AWARD_NO', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_scholarship');
    }
};
