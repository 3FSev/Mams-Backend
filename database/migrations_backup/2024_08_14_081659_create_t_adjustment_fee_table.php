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
        Schema::create('t_adjustment_fee', function (Blueprint $table) {
            $table->id();
            $table->integer('FEE')->nullable()->index('fee');
            $table->decimal('AMOUNT', 11)->nullable();
            $table->string('FEE_CAT', 50)->nullable();
            $table->string('ADJUSTMENT_TYPE', 50)->nullable();
            $table->integer('COURSE')->nullable()->index('course');
            $table->string('STUDENT_TYPE', 25)->nullable();
            $table->integer('YR_LVL')->nullable();
            $table->string('ADMISSION_STATUS', 25)->nullable();
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->unsignedBigInteger('room_id')->nullable();
            $table->unsignedBigInteger('student_id')->nullable();
            $table->unsignedBigInteger('sy_sem_id')->nullable();
            $table->string('STATUS', 25)->nullable()->default('Posted');
            $table->dateTime('DATE')->nullable();
            $table->integer('USER')->nullable();

            $table->foreign('subject_id')->references('id')->on('r_subject');
            $table->foreign('room_id')->references('id')->on('r_room');
            $table->foreign('student_id')->references('id')->on('t_student');
            $table->foreign('sy_sem_id')->references('id')->on('t_sy_sem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_adjustment_fee');
    }
};
