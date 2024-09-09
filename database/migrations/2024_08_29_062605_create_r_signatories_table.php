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
        Schema::create('r_signatories', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('REPORT')->nullable()->index('report');
            $table->integer('PREPARED_BY')->nullable()->index('prepared_by');
            $table->integer('CHECKED_BY')->nullable()->index('checked_by');
            $table->integer('OFFICE_HEAD')->nullable()->index('office_head');
            $table->string('STATUS', 25)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_signatories');
    }
};
