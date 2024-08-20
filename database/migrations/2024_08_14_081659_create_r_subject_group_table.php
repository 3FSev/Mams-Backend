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
        Schema::create('r_subject_group', function (Blueprint $table) {
            $table->id();
            $table->integer('GROUP');
            $table->unsignedBigInteger('subject_id');

            $table->foreign('subject_id')->references('id')->on('r_subject');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_subject_group');
    }
};
