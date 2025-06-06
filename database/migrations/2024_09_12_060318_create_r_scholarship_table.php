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
        Schema::create('r_scholarship', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('code', 100)->nullable();
            $table->string('description', 250)->nullable();
            $table->string('status', 10)->nullable()->default('Active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_scholarship');
    }
};
