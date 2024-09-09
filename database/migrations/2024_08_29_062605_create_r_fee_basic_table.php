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
        Schema::create('r_fee_basic', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('FEE_TYPE', 25)->nullable();
            $table->string('CODE', 25)->nullable();
            $table->string('DESCRIPTION', 100)->nullable();
            $table->string('IS_MANDATORY', 11)->nullable();
            $table->integer('PRIORITY_LVL')->nullable();
            $table->date('EFFECTIVITY_DATE')->nullable();
            $table->decimal('AMOUNT', 11)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_fee_basic');
    }
};
