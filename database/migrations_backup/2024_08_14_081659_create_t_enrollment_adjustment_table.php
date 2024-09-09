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
        Schema::create('t_enrollment_adjustment', function (Blueprint $table) {
            $table->id();
            $table->integer('sysem')->nullable();
            $table->string('program_type', 50)->nullable();
            $table->integer('enrollment_id')->nullable();
            $table->integer('sos_id')->nullable();
            $table->dateTime('date_time_log')->nullable();
            $table->integer('process_by')->nullable();
            $table->string('transaction_type', 50)->nullable();
            $table->integer('no_of_tuition_hrs')->nullable();
            $table->string('is_debit', 25)->nullable()->default('No');
            $table->decimal('amount', 11)->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_enrollment_adjustment');
    }
};
