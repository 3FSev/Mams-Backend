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
        Schema::create('r_user', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('FNAME', 100)->nullable();
            $table->string('MNAME', 100)->nullable();
            $table->string('LNAME', 100)->nullable();
            $table->date('DOB')->nullable();
            $table->string('PLACEOFBIRTH', 100)->nullable();
            $table->string('GENDER', 10)->nullable();
            $table->string('CIVILSTATUS', 100)->nullable();
            $table->string('NATIONALITY', 100)->nullable();
            $table->string('RESIDENT_REGION', 100)->nullable();
            $table->string('RESIDENT_PROVINCE', 100)->nullable();
            $table->string('RESIDENT_MUNICIPALITY', 100)->nullable();
            $table->string('RESIDENT_ADDRESS', 100)->nullable();
            $table->string('RESIDENT_ZIPCODE', 10)->nullable();
            $table->string('PERMANENT_REGION', 100)->nullable();
            $table->string('PERMANENT_PROVINCE', 100)->nullable();
            $table->string('PERMANENT_MUNICIPALITY', 100)->nullable();
            $table->string('PERMANENT_ADDRESS', 100)->nullable();
            $table->string('PERMANENT_ZIPCODE', 10)->nullable();
            $table->string('CONTACT_NUM', 25)->nullable();
            $table->string('HEIGHT', 10)->nullable();
            $table->string('WEIGHT', 10)->nullable();
            $table->string('EMAIL', 1000)->nullable();
            $table->string('RELIGION', 10)->nullable();
            $table->string('BLOOD_TYPE', 10)->nullable();
            $table->string('PROFILEPIC', 100)->nullable();
            $table->timestamp('DATE_REGISTERED')->useCurrent();
            $table->string('usertype', 20)->nullable();
            $table->string('Title', 50)->nullable();
            $table->string('Fcode', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_user');
    }
};
