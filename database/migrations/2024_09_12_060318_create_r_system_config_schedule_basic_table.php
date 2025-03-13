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
        Schema::create('r_system_config_schedule_basic', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('LABEL', 100)->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->dateTime('SCHED_FROM')->nullable();
            $table->dateTime('SCHED_TO')->nullable();
            $table->integer('SY')->nullable()->index('sy');
            $table->string('STATUS', 100)->nullable()->default('Active');
            $table->timestamp('DATE_ADDED')->useCurrentOnUpdate()->useCurrent();
            $table->integer('CAMPUS')->nullable()->index('campus');
            $table->integer('PERIOD')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_system_config_schedule_basic');
    }
};
