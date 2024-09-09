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
            $table->unsignedBigInteger('college_id')->nullable();
            $table->integer('CHAIRPERSON')->nullable()->index('fk_cperson');

            $table->foreign('college_id')->references('id')->on('r_college');
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
