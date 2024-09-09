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
        Schema::create('t_fee_miscellaneous', function (Blueprint $table) {
            $table->id();
            $table->integer('sysem')->nullable()->index('sysem_2');
            $table->integer('program')->nullable()->index('program');
            $table->integer('fee')->nullable()->index('fee');
            $table->decimal('amount', 11)->nullable();
            $table->string('status', 25)->nullable()->default('Active');
            $table->integer('subject')->nullable();

            $table->unique(['sysem', 'program', 'fee'], 'sysem');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_fee_miscellaneous');
    }
};
