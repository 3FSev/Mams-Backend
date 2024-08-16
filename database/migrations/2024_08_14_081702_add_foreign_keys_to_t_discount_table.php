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
        Schema::table('t_discount', function (Blueprint $table) {
            $table->foreign(['DISCOUNT'], 't_discount_ibfk_1')->references(['ID'])->on('r_discount')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_discount', function (Blueprint $table) {
            $table->dropForeign('t_discount_ibfk_1');
        });
    }
};
