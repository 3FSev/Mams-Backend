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
        Schema::create('r_user_refereed_publication', function (Blueprint $table) {
            $table->id();
            $table->integer('USER_PROFILE');
            $table->string('TITLE', 100)->nullable();
            $table->string('EDITORS', 150)->nullable();
            $table->string('TITLE_BOOK', 100)->nullable();
            $table->string('ISSUE', 50)->nullable();
            $table->string('LEVEL', 50)->nullable();
            $table->date('DATE_PUBLICATION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user_refereed_publication');
    }
};
