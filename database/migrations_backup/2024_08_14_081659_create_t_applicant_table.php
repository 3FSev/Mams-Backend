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
        Schema::create('t_applicant', function (Blueprint $table) {
            $table->id();
            $table->date('DATEAPPLIED')->nullable();
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
            $table->string('EMAIL', 100)->nullable();
            $table->string('RELIGION', 100)->nullable();
            $table->string('BLOOD_TYPE', 10)->nullable();
            $table->string('SPECIAL_SKILL', 100)->nullable();
            $table->string('AILMENT', 100)->nullable();
            $table->string('DISABILITY', 100)->nullable();
            $table->integer('FIRST_CHOICE')->nullable()->index('first_choice');
            $table->integer('SECOND_CHOICE')->nullable()->index('second_choice');
            $table->integer('THIRD_CHOICE')->nullable()->index('third_choice');
            $table->string('APPLICATION_TYPE', 100)->nullable();
            $table->string('HS_SCHOOL', 100)->nullable();
            $table->string('HS_GRADYR', 10)->nullable();
            $table->string('HS_ADDRESS', 100)->nullable();
            $table->string('HSGWA', 10)->nullable();
            $table->string('STATUS', 25)->nullable()->default('Pending');
            $table->string('COL_SCHOOL', 100)->nullable();
            $table->string('COL_ADDRESS', 100)->nullable();
            $table->string('COL_YEAR', 10)->nullable();
            $table->string('COL_COURSE', 100)->nullable();
            $table->string('PROFILEPIC', 100)->nullable();
            $table->integer('FINAL_COURSE')->nullable()->index('final_course');
            $table->string('SUFFIX', 25)->nullable();
            $table->string('PASSPORT', 100)->nullable();
            $table->string('COUNTRY_OF_ORIGIN', 100)->nullable();
            $table->date('DATE_ISSUED')->nullable();
            $table->string('PLACE_ISSUED', 100)->nullable();
            $table->integer('GUARDIAN')->nullable()->index('guardian');
            $table->string('STUD_PROGRAM_TYPE', 25)->nullable()->default('COLLEGE');
            $table->integer('TRACK')->nullable();
            $table->integer('STRAND')->nullable();
            $table->integer('GRADE_LVL')->nullable();
            $table->integer('CAMPUS')->nullable()->index('campus');
            $table->integer('GS_COURSE')->nullable();
            $table->integer('GS_CAMPUS')->nullable();
            $table->timestamp('TIMESTAMP')->useCurrentOnUpdate()->useCurrent();
            $table->string('ELEM_SCHOOL', 250)->nullable();
            $table->string('ELEM_GRADYR', 10)->nullable();
            $table->string('ELEM_ADDRESS', 250)->nullable();
            $table->string('PRIMARY_SCHOOL', 250)->nullable();
            $table->string('PRIMARY_GRADYR', 10)->nullable();
            $table->string('PRIMARY_ADDRESS', 250)->nullable();
            $table->string('entrance_credentials', 250)->nullable();
            $table->string('SHS_SCHOOL', 100)->nullable();
            $table->string('SHS_ADDRESS', 100)->nullable();
            $table->string('SHSGWA', 10)->nullable();
            $table->string('SHS_GRADYR', 10)->nullable();
            $table->string('LASTSCHOOL', 150)->nullable();
            $table->integer('PARENT')->nullable()->index('t_applicant_ibfk_3');
            $table->string('MS_SCHOOL', 100)->nullable();
            $table->string('MS_GRADYR', 10)->nullable();
            $table->string('COL_GRADYR', 10)->nullable();
            $table->integer('ONLINE_ID')->nullable();
            $table->string('SIGNPIC', 20)->nullable();
            $table->string('IPGroup', 5)->nullable();
            $table->string('WhatGroup', 100)->nullable();
            $table->string('ModeTransport', 100)->nullable();
            $table->string('Residence', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_applicant');
    }
};
