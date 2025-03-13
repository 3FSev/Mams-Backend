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
        Schema::table('r_clearance_office', function (Blueprint $table) {
            $table->foreign('office_head')->references('id')->on('r_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_clearance_office', function (Blueprint $table) {
            $table->dropForeign(['office_head']);
        });
    }
};
