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
        Schema::create('t_audit_curriculum', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('CURRICULUM_ID')->nullable();
            $table->integer('USER_ID')->nullable();
            $table->text('USER_ACTION')->nullable();
            $table->timestamp('TIMESTAMP')->useCurrent();
            $table->string('PROGRAM_TYPE', 25)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_audit_curriculum');
    }
};
