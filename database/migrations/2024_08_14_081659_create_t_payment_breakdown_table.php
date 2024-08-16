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
        Schema::create('t_payment_breakdown', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sysem')->nullable();
            $table->integer('student_id')->nullable();
            $table->string('program_type', 50)->nullable();
            $table->integer('payment_id')->nullable();
            $table->integer('no_of_payment')->nullable();
            $table->decimal('amount', 18)->nullable();
            $table->decimal('original_amount', 18)->nullable();
            $table->dateTime('date_added')->nullable();
            $table->dateTime('date_updated')->nullable();
            $table->integer('sy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_payment_breakdown');
    }
};
