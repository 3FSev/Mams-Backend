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
        Schema::create('tblstudclasslist', function (Blueprint $table) {
            $table->integer('ID', true)->index('id');
            $table->string('SY', 4);
            $table->string('CourseCode', 15)->index('coursecode');
            $table->smallInteger('YearLevel')->default(0)->index('yearlevel');
            $table->char('Sem', 1)->index('sem');
            $table->string('ParentSection', 20);
            $table->string('SectCode', 20)->index('sectcode');
            $table->string('SubjCode', 200);
            $table->string('ESubjCode', 50);
            $table->char('GradeStatus', 5)->index('gradestatus');
            $table->string('StudNo', 15)->index('studnoidx');
            $table->date('DateEnrolled')->default('0000-00-00');
            $table->string('EnrolledBy', 15)->default('');
            $table->date('DateCreated')->default('0000-00-00');
            $table->string('UserID', 15);
            $table->string('FinalGrade', 10);
            $table->string('ComputedFinalGrade', 8);
            $table->integer('IsPosted')->default(0);
            $table->string('ReExam', 4)->index('reexam');
            $table->tinyInteger('RemarksID');
            $table->text('Remarks');
            $table->string('School')->nullable();
            $table->string('Types', 2)->nullable();
            $table->string('IsTransferee', 5)->nullable();
            $table->string('TransfereeID', 5)->nullable();
            $table->integer('SORTING')->nullable();
            $table->integer('isNotDeleted')->nullable();

            $table->primary(['SY', 'CourseCode', 'Sem', 'SubjCode', 'ESubjCode', 'StudNo', 'SectCode']);
            $table->index(['SubjCode', 'StudNo'], 'studno');
            $table->index(['CourseCode', 'SubjCode', 'StudNo', 'SY', 'Sem', 'SectCode'], 'subjcode');
            $table->index(['SY', 'Sem', 'SubjCode', 'StudNo'], 'sy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblstudclasslist');
    }
};
