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
        Schema::create('r_credentials', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ccode', 100)->nullable();
            $table->string('cdescription', 250)->nullable();
            $table->string('type', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_credentials');
    }
};
