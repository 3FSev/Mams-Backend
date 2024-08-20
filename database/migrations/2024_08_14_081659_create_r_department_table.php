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
        Schema::create('r_department', function (Blueprint $table) {
            $table->id();
            $table->string('CODE', 25);
            $table->string('NAME', 250);
            $table->integer('COLLEGE')->nullable()->index('college');
            $table->integer('CHAIRPERSON')->nullable()->index('fk_cperson');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_department');
    }
};
