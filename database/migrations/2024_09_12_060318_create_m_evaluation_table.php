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
        Schema::create('m_evaluation', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('sosid');
            $table->integer('fid');
            $table->integer('student');
            $table->integer('sysem')->nullable();
            $table->timestamp('date_taken')->useCurrent();
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_evaluation');
    }
};
