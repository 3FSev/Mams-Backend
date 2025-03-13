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
        Schema::create('t_fee_room', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SY_SEM')->index('sy_sem');
            $table->integer('FEE')->index('fee');
            $table->integer('ROOM')->index('room');
            $table->decimal('AMOUNT', 11);
            $table->string('STATUS', 25)->nullable()->default('Active');

            $table->unique(['SY_SEM', 'FEE', 'ROOM'], 'sy_sem_2');
            $table->unique(['SY_SEM', 'FEE', 'ROOM'], 'sy_sem_3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fee_room');
    }
};
