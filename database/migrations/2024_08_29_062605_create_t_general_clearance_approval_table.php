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
        Schema::create('t_general_clearance_approval', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('OFFICE', 100)->nullable();
            $table->integer('SIGNATORY')->nullable();
            $table->integer('STUDENT')->nullable();
            $table->integer('CURRICULUM')->nullable();
            $table->integer('CLEARED')->nullable();
            $table->integer('STATUS')->nullable()->default(1);
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('ADDED_BY')->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
            $table->integer('UPDATED_BY')->nullable();
            $table->text('remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_general_clearance_approval');
    }
};
