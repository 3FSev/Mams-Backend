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
        Schema::create('r_guardian', function (Blueprint $table) {
            $table->id();
            $table->string('FNAME', 50);
            $table->string('MNAME', 50)->nullable();
            $table->string('LNAME', 50);
            $table->string('ADDRESS', 250)->nullable();
            $table->string('PROVINCE', 100)->nullable();
            $table->string('MUNICIPALITY', 100);
            $table->string('ZIPCODE', 10)->nullable();
            $table->string('PHONE', 15)->nullable();
            $table->string('USERNAME', 50)->nullable();
            $table->string('PASSWORD', 50)->nullable();
            $table->string('VAL', 50)->nullable();
            $table->string('relationship', 100)->nullable();
            $table->integer('applicant')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_guardian');
    }
};
