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
        Schema::create('t_graduation_details', function (Blueprint $table) {
            $table->id();
            $table->integer('campus')->nullable();
            $table->integer('college')->nullable();
            $table->date('grad_date')->nullable();
            $table->text('grad_venue')->nullable();
            $table->text('note')->nullable();
            $table->text('sy_sem')->nullable();
            $table->integer('added_by')->nullable();
            $table->timestamp('date_added')->useCurrent();
            $table->integer('updated_by')->nullable();
            $table->dateTime('date_updated')->nullable();
            $table->integer('STATUS')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_graduation_details');
    }
};
