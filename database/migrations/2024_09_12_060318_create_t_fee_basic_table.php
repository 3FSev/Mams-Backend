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
        Schema::create('t_fee_basic', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('FEE_TYPE', 25)->nullable();
            $table->integer('FEE_ID')->nullable()->index('fee_id');
            $table->decimal('AMOUNT', 11)->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('SY')->nullable()->index('sy');
            $table->integer('SYSEM')->nullable()->index('sysem');
            $table->integer('TRACK')->nullable()->index('track');
            $table->integer('STRAND')->nullable()->index('strand');
            $table->string('CLASS_TYPE', 25)->nullable();
            $table->string('PROGRAM_TYPE', 11)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->integer('CAMPUS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fee_basic');
    }
};
