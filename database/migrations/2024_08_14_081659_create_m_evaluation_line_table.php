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
        Schema::create('m_evaluation_line', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->integer('rate');

            $table->foreign('question_id')->references('id')->on('m_question_list');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_evaluation_line');
    }
};
