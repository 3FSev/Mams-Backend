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
        Schema::create('t_payment_sched', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('SYSEM')->nullable();
            $table->integer('PAYMENT')->nullable();
            $table->decimal('TUITION_FEE', 11)->nullable();
            $table->decimal('MISC_FEE', 11)->nullable();
            $table->decimal('OTHER_FEE', 11)->nullable();
            $table->string('SURCHARGE_TYPE', 25)->nullable();
            $table->decimal('SURCHARGE', 11)->nullable();
            $table->date('STARTDATE')->nullable();
            $table->date('DUEDATE')->nullable();
            $table->integer('NO_PAYMENT')->nullable();
            $table->string('DESCRIPTION', 50)->nullable();
            $table->string('PROGRAM_TYPE', 50)->nullable()->index('program_type');
            $table->decimal('AMOUNT', 11)->nullable()->default(0);
            $table->string('PAYMENT_TYPE', 11)->nullable()->default('Fixed');
            $table->integer('SY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_payment_sched');
    }
};
