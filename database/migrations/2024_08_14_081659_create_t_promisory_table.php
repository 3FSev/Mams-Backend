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
        Schema::create('t_promisory', function (Blueprint $table) {
            $table->id();
            $table->integer('fromsysem')->nullable();
            $table->integer('tosysem')->nullable();
            $table->integer('processed_by')->nullable();
            $table->string('reason', 9999)->nullable();
            $table->decimal('amount', 19)->nullable();
            $table->integer('is_forwarded')->nullable()->default(0);
            $table->dateTime('date_processed')->nullable();
            $table->integer('student_id')->nullable();
            $table->integer('fromsy')->nullable();
            $table->integer('tosy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_promisory');
    }
};
