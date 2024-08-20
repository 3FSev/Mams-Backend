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
        Schema::create('t_units_allowed_enrollment', function (Blueprint $table) {
            $table->id();
            $table->integer('sysem')->nullable();
            $table->integer('program')->nullable();
            $table->integer('units_allowed')->nullable();
            $table->string('allow_override', 25)->nullable()->default('No');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_units_allowed_enrollment');
    }
};
