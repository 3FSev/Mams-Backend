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
        Schema::create('r_system_config_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('LABEL', 100)->nullable();
            $table->integer('COLLEGE')->nullable()->index('college');
            $table->integer('YEAR_LEVEL')->nullable();
            $table->dateTime('SCHED_FROM')->nullable();
            $table->dateTime('SCHED_TO')->nullable();
            $table->unsignedBigInteger('sy_sem_id')->nullable();
            $table->string('STATUS', 100)->nullable()->default('Active');
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('PERIOD')->nullable();
            $table->integer('CAMPUS')->nullable();
            $table->string('PROGRAM_TYPE', 15)->nullable();
            $table->date('DATEOFGRAD')->nullable();

            $table->foreign('sy_sem_id')->references('id')->on('t_sy_sem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_system_config_schedule');
    }
};
