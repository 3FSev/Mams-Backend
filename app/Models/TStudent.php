<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudent
 * 
 * @property int $ID
 * @property int|null $APPLICANT
 * @property string|null $STUDENT_NO
 * @property int|null $CURRICULUM
 * @property string|null $NSTP
 * @property int|null $COURSE
 * @property int|null $SECTION
 * @property string|null $STUDENT_TYPE
 * @property int|null $YEAR_LEVEL_APPLIED
 * @property int|null $PRESENT_YEAR_LEVEL
 * @property string|null $SEMESTER_APPLIED
 * @property string|null $PRESENT_SEMESTER
 * @property string|null $ADMISSION_STATUS
 * @property int|null $ADMISSION_YEAR
 * @property int|null $HAS_STUDENT_NO
 * @property int|null $IS_GRADUATE
 * @property string|null $NSTP2
 * @property string|null $STUD_PROGRAM_TYPE
 * @property int|null $TRACK
 * @property int|null $STRAND
 * @property string|null $CLASS_TYPE
 * @property int|null $IS_GRADUATE_KINDER
 * @property int|null $IS_GRADUATE_ELEM
 * @property int|null $IS_GRADUATE_JHS
 * @property int|null $IS_GRADUATE_SHS
 * @property int|null $IS_GRADUATE_GS
 * @property Carbon|null $GRADUATED_COLLEGE
 * @property Carbon|null $GRADUATED_GS
 * @property Carbon|null $GRADUATED_SHS
 * @property Carbon|null $GRADUATED_JHS
 * @property Carbon|null $GRADUATED_ELEM
 * @property Carbon|null $GRADUATED_KINDER
 * @property Carbon|null $GRADUATED_SPED
 * @property Carbon $TIMESTAMP
 * @property string|null $SO_NO
 * @property int|null $OLD_YR_LVL
 * @property int|null $REMEDIAL_COURSE
 * @property int|null $REMEDIAL_CURRICULUM
 * @property string|null $NSTP_SN
 * @property string|null $LEARNING
 * 
 * @property RCourse|null $r_course
 * @property RCurriculum|null $r_curriculum
 * @property RStudentAccess $r_student_access
 * @property Collection|TAccreditation[] $t_accreditations
 * @property Collection|TAdjustmentFee[] $t_adjustment_fees
 * @property Collection|TAssessment[] $t_assessments
 * @property Collection|TAssessmentLine[] $t_assessment_lines
 * @property Collection|TCompreGrade[] $t_compre_grades
 * @property Collection|TDeficiency[] $t_deficiencies
 * @property Collection|TGuidanceDeficiency[] $t_guidance_deficiencies
 * @property Collection|TPenalty[] $t_penalties
 * @property Collection|TProcessedDocument[] $t_processed_documents
 * @property Collection|TRemedial[] $t_remedials
 * @property Collection|TSectionAssignment[] $t_section_assignments
 * @property Collection|TStudCurriculum[] $t_stud_curriculums
 * @property Collection|TStudentEnrollment[] $t_student_enrollments
 * @property Collection|TStudentEnrollmentBasic[] $t_student_enrollment_basics
 * @property Collection|TStudentEnrollmentSh[] $t_student_enrollment_shes
 * @property Collection|TStudentGradesBasic[] $t_student_grades_basics
 *
 * @package App\Models
 */
class TStudent extends Model
{
	protected $table = 't_student';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANT' => 'int',
		'CURRICULUM' => 'int',
		'COURSE' => 'int',
		'SECTION' => 'int',
		'YEAR_LEVEL_APPLIED' => 'int',
		'PRESENT_YEAR_LEVEL' => 'int',
		'ADMISSION_YEAR' => 'int',
		'HAS_STUDENT_NO' => 'int',
		'IS_GRADUATE' => 'int',
		'TRACK' => 'int',
		'STRAND' => 'int',
		'IS_GRADUATE_KINDER' => 'int',
		'IS_GRADUATE_ELEM' => 'int',
		'IS_GRADUATE_JHS' => 'int',
		'IS_GRADUATE_SHS' => 'int',
		'IS_GRADUATE_GS' => 'int',
		'GRADUATED_COLLEGE' => 'datetime',
		'GRADUATED_GS' => 'datetime',
		'GRADUATED_SHS' => 'datetime',
		'GRADUATED_JHS' => 'datetime',
		'GRADUATED_ELEM' => 'datetime',
		'GRADUATED_KINDER' => 'datetime',
		'GRADUATED_SPED' => 'datetime',
		'TIMESTAMP' => 'datetime',
		'OLD_YR_LVL' => 'int',
		'REMEDIAL_COURSE' => 'int',
		'REMEDIAL_CURRICULUM' => 'int'
	];

	protected $fillable = [
		'APPLICANT',
		'STUDENT_NO',
		'CURRICULUM',
		'NSTP',
		'COURSE',
		'SECTION',
		'STUDENT_TYPE',
		'YEAR_LEVEL_APPLIED',
		'PRESENT_YEAR_LEVEL',
		'SEMESTER_APPLIED',
		'PRESENT_SEMESTER',
		'ADMISSION_STATUS',
		'ADMISSION_YEAR',
		'HAS_STUDENT_NO',
		'IS_GRADUATE',
		'NSTP2',
		'STUD_PROGRAM_TYPE',
		'TRACK',
		'STRAND',
		'CLASS_TYPE',
		'IS_GRADUATE_KINDER',
		'IS_GRADUATE_ELEM',
		'IS_GRADUATE_JHS',
		'IS_GRADUATE_SHS',
		'IS_GRADUATE_GS',
		'GRADUATED_COLLEGE',
		'GRADUATED_GS',
		'GRADUATED_SHS',
		'GRADUATED_JHS',
		'GRADUATED_ELEM',
		'GRADUATED_KINDER',
		'GRADUATED_SPED',
		'TIMESTAMP',
		'SO_NO',
		'OLD_YR_LVL',
		'REMEDIAL_COURSE',
		'REMEDIAL_CURRICULUM',
		'NSTP_SN',
		'LEARNING'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'REMEDIAL_COURSE');
	}

	public function r_curriculum()
	{
		return $this->belongsTo(RCurriculum::class, 'REMEDIAL_CURRICULUM');
	}

	public function r_student_access()
	{
		return $this->hasOne(RStudentAccess::class, 'STUDENT_ID');
	}

	public function t_accreditations()
	{
		return $this->hasMany(TAccreditation::class, 'STUDENT_ID');
	}

	public function t_adjustment_fees()
	{
		return $this->hasMany(TAdjustmentFee::class, 'STUDENT');
	}

	public function t_assessments()
	{
		return $this->hasMany(TAssessment::class, 'STUDENT_ID');
	}

	public function t_assessment_lines()
	{
		return $this->hasMany(TAssessmentLine::class, 'STUDENT_ID');
	}

	public function t_compre_grades()
	{
		return $this->hasMany(TCompreGrade::class, 'STUDENT');
	}

	public function t_deficiencies()
	{
		return $this->hasMany(TDeficiency::class, 'STUDENT_ID');
	}

	public function t_guidance_deficiencies()
	{
		return $this->hasMany(TGuidanceDeficiency::class, 'STUDENT_ID');
	}

	public function t_penalties()
	{
		return $this->hasMany(TPenalty::class, 'STUDENT');
	}

	public function t_processed_documents()
	{
		return $this->hasMany(TProcessedDocument::class, 'STUDENT');
	}

	public function t_remedials()
	{
		return $this->hasMany(TRemedial::class, 'STUDENT');
	}

	public function t_section_assignments()
	{
		return $this->hasMany(TSectionAssignment::class, 'STUDENT');
	}

	public function t_stud_curriculums()
	{
		return $this->hasMany(TStudCurriculum::class, 'STUDENT_ID');
	}

	public function t_student_enrollments()
	{
		return $this->hasMany(TStudentEnrollment::class, 'STUDENT');
	}

	public function t_student_enrollment_basics()
	{
		return $this->hasMany(TStudentEnrollmentBasic::class, 'STUDENT');
	}

	public function t_student_enrollment_shes()
	{
		return $this->hasMany(TStudentEnrollmentSh::class, 'STUDENT');
	}

	public function t_student_grades_basics()
	{
		return $this->hasMany(TStudentGradesBasic::class, 'STUDENTID');
	}
}
