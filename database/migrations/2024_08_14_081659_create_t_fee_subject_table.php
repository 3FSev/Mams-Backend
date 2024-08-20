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
        Schema::create('t_fee_subject', function (Blueprint $table) {
            $table->id();
            $table->integer('SY_SEM')->index('sy_sem');
            $table->integer('FEE')->index('fee');
            $table->integer('SUBJECT')->index('subject');
            $table->decimal('AMOUNT', 11);
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->integer('YR_LVL')->nullable()->default(1);

            $table->unique(['SY_SEM', 'YR_LVL', 'FEE', 'SUBJECT'], 'sy_sem_2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fee_subject');
    }
};
