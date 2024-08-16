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
        Schema::table('r_room_course', function (Blueprint $table) {
            $table->foreign(['ROOM'], 'r_room_course_ibfk_1')->references(['ID'])->on('r_room')->onUpdate('restrict')->onDelete('no action');
            $table->foreign(['COURSE'], 'r_room_course_ibfk_2')->references(['ID'])->on('r_course')->onUpdate('restrict')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('r_room_course', function (Blueprint $table) {
            $table->dropForeign('r_room_course_ibfk_1');
            $table->dropForeign('r_room_course_ibfk_2');
        });
    }
};
