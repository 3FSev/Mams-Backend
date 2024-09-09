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
        Schema::create('t_application_graduation', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('STUDENT_NO', 100)->nullable();
            $table->string('NAME', 250)->nullable();
            $table->string('GENDER', 10)->nullable();
            $table->date('DOB')->nullable();
            $table->string('PB', 250)->nullable();
            $table->string('CONTACTNO', 100)->nullable();
            $table->string('EMAILADD', 100)->nullable();
            $table->string('FATHER', 250)->nullable();
            $table->string('MOTHERMAIDEN', 250)->nullable();
            $table->string('ADDRESS', 250)->nullable();
            $table->string('ELEM1_4', 250)->nullable();
            $table->string('ELEM_START1_4', 10)->nullable();
            $table->string('ELEM_GRAD1_4', 10)->nullable();
            $table->string('ELEM5_6', 250)->nullable();
            $table->string('ELEM_START5_6', 10)->nullable();
            $table->string('ELEM_GRAD5_6', 10)->nullable();
            $table->string('HS1', 250)->nullable();
            $table->string('HS_START1', 10)->nullable();
            $table->string('HS_END1', 10)->nullable();
            $table->string('HS2', 250)->nullable();
            $table->string('HS_START2', 10)->nullable();
            $table->string('HS_END2', 10)->nullable();
            $table->string('HS3', 250)->nullable();
            $table->string('HS_START3', 10)->nullable();
            $table->string('HS_END3', 10)->nullable();
            $table->string('HS4', 250)->nullable();
            $table->string('HS_START4', 10)->nullable();
            $table->string('HS_END4', 10)->nullable();
            $table->string('ENTRANCE_DATA', 100)->nullable();
            $table->string('DEGREE', 250)->nullable();
            $table->string('MAJOR', 250)->nullable();
            $table->date('DATE_OF_GRADUATION')->nullable();
            $table->string('LOYALTY_MEDALIST', 10)->nullable();
            $table->string('PICTURE', 250)->nullable();
            $table->string('SCHOLARSHIP1', 250)->nullable();
            $table->string('SCHOLARSHIP2', 250)->nullable();
            $table->string('SCHOLARSHIP3', 250)->nullable();
            $table->string('ORG1', 250)->nullable();
            $table->string('ORG2', 250)->nullable();
            $table->string('ORG3', 250)->nullable();
            $table->string('HONORS1', 250)->nullable();
            $table->string('HONORS2', 250)->nullable();
            $table->string('HONORS3', 250)->nullable();
            $table->string('HONORS4', 250)->nullable();
            $table->string('HONORS5', 250)->nullable();
            $table->string('SEMINAR1', 250)->nullable();
            $table->string('SEMINAR2', 250)->nullable();
            $table->string('SEMINAR3', 250)->nullable();
            $table->string('SEMINAR4', 250)->nullable();
            $table->string('SEMINAR5', 250)->nullable();
            $table->string('SKILLS1', 250)->nullable();
            $table->string('SKILLS2', 250)->nullable();
            $table->string('SKILLS3', 250)->nullable();
            $table->date('DATEOFAPPLICATION')->nullable();
            $table->date('DATEUPDATED')->nullable();
            $table->string('applicationID', 100)->nullable();
            $table->string('FBNAME', 250)->nullable();
            $table->string('STATUS', 100)->nullable();
            $table->string('REGDEF', 250)->nullable();
            $table->string('UPDATEDBY', 100)->nullable();
            $table->string('MINOR', 250)->nullable();
            $table->text('THESIS')->nullable();
            $table->string('COLLEGE_NAME', 250)->nullable();
            $table->string('COL_LOCATION', 250)->nullable();
            $table->string('YEAR_GRAD_COLLEGE', 10)->nullable();
            $table->string('PROGRAM_TYPE', 20)->nullable();
            $table->string('GUARDIAN', 250)->nullable();
            $table->string('name_g11', 250)->nullable();
            $table->string('start_g11', 10)->nullable();
            $table->string('grad_g11', 10)->nullable();
            $table->string('name_g12', 250)->nullable();
            $table->string('start_g12', 10)->nullable();
            $table->string('grad_g12', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_application_graduation');
    }
};
