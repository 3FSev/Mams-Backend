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
        Schema::create('t_compre', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('STUDENT');
            $table->string('STATUS', 25);
            $table->integer('SY_SEM');
            $table->dateTime('DATE_REQUEST');
            $table->dateTime('DATE_STATUS');
            $table->integer('APPROVER');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_compre');
    }
};
