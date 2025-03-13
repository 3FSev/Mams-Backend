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
        Schema::create('c_sy_sem', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25);
            $table->integer('SY')->index('sy');
            $table->string('TERM', 11);
            $table->string('STATUS', 25)->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_sy_sem');
    }
};
