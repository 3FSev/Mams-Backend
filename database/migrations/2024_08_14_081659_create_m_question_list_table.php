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
        Schema::create('m_question_list', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('academic_id');
            $table->text('question');
            $table->integer('order_by');
            $table->integer('criteria_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_question_list');
    }
};
