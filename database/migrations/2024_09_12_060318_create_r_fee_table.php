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
        Schema::create('r_fee', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('FEE_TYPE', 25);
            $table->string('CODE', 25);
            $table->string('DESCRIPTION', 250);
            $table->string('IS_MANDATORY', 25)->nullable();
            $table->string('IS_CHARGE_ONCE', 25)->nullable();
            $table->string('NO_SURCHARGE', 25)->nullable();
            $table->integer('PRIORITY_LVL')->default(100);
            $table->string('STATUS', 25)->nullable()->default('Active');
            $table->date('EFFECTIVITY_DATE')->nullable();
            $table->decimal('AMOUNTS', 11)->nullable()->default(0);
            $table->string('ISDISCOUNTABLE', 11)->nullable()->default('Yes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_fee');
    }
};
