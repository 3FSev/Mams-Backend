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
        Schema::create('t_scholar', function (Blueprint $table) {
            $table->integer('ID', true)->index('id');
            $table->integer('STUDENT_ID');
            $table->integer('SY_SEM');
            $table->integer('COURSE')->nullable();
            $table->string('SCHOLARSHIP', 100);

            $table->primary(['STUDENT_ID', 'SY_SEM', 'SCHOLARSHIP']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_scholar');
    }
};
