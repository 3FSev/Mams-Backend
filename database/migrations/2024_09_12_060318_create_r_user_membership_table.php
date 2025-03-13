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
        Schema::create('r_user_membership', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->integer('USER_PROFILE');
            $table->string('POSITION', 50)->nullable();
            $table->string('ORGANIZATION', 50)->nullable();
            $table->string('LEVEL', 50)->nullable();
            $table->date('DATE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_membership');
    }
};
