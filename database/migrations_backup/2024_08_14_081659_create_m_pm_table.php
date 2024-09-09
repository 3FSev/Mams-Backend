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
        Schema::create('m_pm', function (Blueprint $table) {
            $table->id();
            $table->integer('id2');
            $table->string('title', 256);
            $table->bigInteger('user1');
            $table->bigInteger('user2');
            $table->text('message');
            $table->integer('timestamp');
            $table->string('user1read', 3);
            $table->string('user2read', 3);
            $table->string('ipaddress', 25)->nullable();
            $table->bigInteger('user3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_pm');
    }
};
