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
        Schema::create('r_chart_of_accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('description', 100)->nullable();
            $table->string('for_cashier', 11)->nullable()->default('No');
            $table->string('status', 11)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_chart_of_accounts');
    }
};
