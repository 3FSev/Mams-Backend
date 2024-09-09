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
            $table->integer('ID', true);
            $table->string('LABEL', 100)->nullable();
            $table->integer('COLLEGE')->nullable()->index('college');
            $table->integer('YEAR_LEVEL')->nullable();
            $table->dateTime('SCHED_FROM')->nullable();
            $table->dateTime('SCHED_TO')->nullable();
            $table->integer('SY_SEM')->nullable()->index('sy_sem');
            $table->string('STATUS', 100)->nullable()->default('Active');
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('PERIOD')->nullable();
            $table->integer('CAMPUS')->nullable();
            $table->string('PROGRAM_TYPE', 15)->nullable();
            $table->date('DATEOFGRAD')->nullable();
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
