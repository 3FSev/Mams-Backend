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
        Schema::create('t_discount', function (Blueprint $table) {
            $table->id();
            $table->integer('DISCOUNT')->index('discount');
            $table->decimal('TF_FIXED', 11)->nullable();
            $table->decimal('TF_PERCENT', 11)->nullable();
            $table->decimal('BASIC_FIXED', 11)->nullable();
            $table->decimal('BASIC_PERCENT', 11)->nullable();
            $table->decimal('LAB_FIXED', 11)->nullable();
            $table->decimal('LAB_PERCENT', 11)->nullable();
            $table->decimal('MISC_FIXED', 11)->nullable();
            $table->decimal('MISC_PERCENT', 11)->nullable();
            $table->decimal('OTHER_FIXED', 11)->nullable();
            $table->decimal('OTHER_PERCENT', 11)->nullable();
            $table->decimal('TOTAL_FIXED', 11)->nullable();
            $table->decimal('TOTAL_PERCENT', 11)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_discount');
    }
};
