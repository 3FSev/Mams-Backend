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
        Schema::create('t_section_offering_sched', function (Blueprint $table) {
            $table->id();
            $table->integer('SY_SEM');
            $table->date('DATE_FROM');
            $table->date('DATE_TO');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_section_offering_sched');
    }
};
