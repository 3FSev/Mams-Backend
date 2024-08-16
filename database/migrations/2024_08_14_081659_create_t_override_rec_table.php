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
        Schema::create('t_override_rec', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('CODE', 100)->nullable();
            $table->timestamp('DATE_ADDED')->useCurrent();
            $table->integer('USER')->nullable()->index('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_override_rec');
    }
};
