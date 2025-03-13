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
        Schema::create('r_college', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 25);
            $table->string('NAME', 250);
            $table->integer('CAMPUS')->index('campus');
            $table->string('PROGRAM_TYPE', 25)->nullable()->index('program_type');
            $table->integer('DEAN')->nullable()->index('fk_dean');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_college');
    }
};
