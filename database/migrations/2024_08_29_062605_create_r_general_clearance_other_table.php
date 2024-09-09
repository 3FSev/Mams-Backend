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
        Schema::create('r_general_clearance_other', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->text('REQUIREMENTS')->nullable();
            $table->text('REMINDER')->nullable();
            $table->text('CLAIM_STUB_NOTES')->nullable();
            $table->integer('STATUS')->nullable()->default(1);
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('ADDED_BY')->nullable();
            $table->dateTime('DATE_UPDATED')->nullable();
            $table->integer('UPDATED_BY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_general_clearance_other');
    }
};
