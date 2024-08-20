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
        Schema::create('r_system_config_schedule_eog', function (Blueprint $table) {
            $table->id();
            $table->integer('FACULTY')->nullable()->index('faculty');
            $table->dateTime('SCHED_FROM')->nullable();
            $table->dateTime('SCHED_TO')->nullable();
            $table->integer('SOSID')->nullable();
            $table->string('STATUS', 100)->nullable()->default('Active');
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('PERIOD')->nullable();
            $table->string('PROGRAM_TYPE', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_system_config_schedule_eog');
    }
};
