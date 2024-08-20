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
        Schema::create('t_faculty_load_line', function (Blueprint $table) {
            $table->id();
            $table->integer('FACULTY_LOAD')->index('fk_faculty_load');
            $table->string('IS_MAIN', 5);
            $table->integer('FACULTY');
            $table->string('LOAD_TYPE', 5);
            $table->time('TIME_START')->nullable();
            $table->time('TIME_END')->nullable();
            $table->date('DATE_START')->nullable();
            $table->date('DATE_END')->nullable();
            $table->string('STATUS', 15);
            $table->string('DAY', 2);
            $table->timestamp('DATE_STATUS')->useCurrent();
            $table->decimal('NO_UNITS', 10, 0)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_faculty_load_line');
    }
};
