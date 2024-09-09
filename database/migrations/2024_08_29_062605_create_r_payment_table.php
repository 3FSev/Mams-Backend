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
        Schema::create('r_payment', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('DESCRIPTION', 50)->nullable();
            $table->integer('NO_OF_PAYMENT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_payment');
    }
};
