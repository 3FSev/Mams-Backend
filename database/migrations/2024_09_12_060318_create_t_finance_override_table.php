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
        Schema::create('t_finance_override', function (Blueprint $table) {
            $table->integer('sysem')->nullable();
            $table->integer('student')->nullable();
            $table->integer('allowed_by')->nullable();
            $table->string('atatus', 25)->nullable()->default('Active');
            $table->decimal('amount', 11)->nullable();
            $table->integer('id', true);
            $table->date('date_processed')->nullable();
            $table->integer('sy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_finance_override');
    }
};
