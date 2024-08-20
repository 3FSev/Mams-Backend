<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use KitLoong\MigrationsGenerator\Enum\Migrations\Method\Foreign;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('m_question_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('academic_id');
            $table->text('question');
            $table->integer('order_by');
            $table->unsignedBigInteger('criteria_id');

            $table->foreign('criteria_id')->references('id')->on('m_criteria_list');
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
