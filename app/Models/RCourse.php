<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCourse
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $DESCRIPTION
 * @property int $NO_OF_YEARS
 * @property int $COLLEGE
 * @property int|null $DEPARTMENT
 * @property int $COURSE_CATEGORY
 * @property float $HSGWA
 * @property int $NO_OF_ENROLLEES
 * @property string|null $MAJOR
 * @property string|null $PROGRAM_TYPE
 * @property string|null $STATUS
 * @property string|null $W_BRIDGING
 * @property int|null $prog_coord
 * 
 * @property RCollege $r_college
 * @property RDepartment|null $r_department
 * @property Collection|RCourseGradePrereq[] $r_course_grade_prereqs
 * @property Collection|RCurriculumG[] $r_curriculum_gs
 * @property Collection|RGradingEquivalent[] $r_grading_equivalents
 * @property Collection|RGradingEquivalentG[] $r_grading_equivalent_gs
 * @property Collection|RRoomCourse[] $r_room_courses
 * @property Collection|RSection[] $r_sections
 * @property Collection|TAdjustmentFee[] $t_adjustment_fees
 * @property Collection|TCompreFee[] $t_compre_fees
 * @property Collection|TCompreGrade[] $t_compre_grades
 * @property Collection|TFeeCourse[] $t_fee_courses
 * @property Collection|TInterview[] $t_interviews
 * @property Collection|TInterviewG[] $t_interview_gs
 * @property Collection|TSectionOfferingOpen[] $t_section_offering_opens
 * @property Collection|TStudent[] $t_students
 * @property Collection|TTuitionFee[] $t_tuition_fees
 *
 * @package App\Models
 */
class RCourse extends Model
{
	protected $table = 'r_course';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'NO_OF_YEARS' => 'int',
		'COLLEGE' => 'int',
		'DEPARTMENT' => 'int',
		'COURSE_CATEGORY' => 'int',
		'HSGWA' => 'float',
		'NO_OF_ENROLLEES' => 'int',
		//'W_BRIDGING' => 'binary',
		'prog_coord' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'NO_OF_YEARS',
		'COLLEGE',
		'DEPARTMENT',
		'COURSE_CATEGORY',
		'HSGWA',
		'NO_OF_ENROLLEES',
		'MAJOR',
		'PROGRAM_TYPE',
		'STATUS',
		'W_BRIDGING',
		'prog_coord'
	];

	public function r_college()
	{
		return $this->belongsTo(RCollege::class, 'COLLEGE');
	}

	public function r_department()
	{
		return $this->belongsTo(RDepartment::class, 'DEPARTMENT');
	}

	public function r_course_grade_prereqs()
	{
		return $this->hasMany(RCourseGradePrereq::class, 'COURSE');
	}

	public function r_curriculum_gs()
	{
		return $this->hasMany(RCurriculumG::class, 'PROGRAM');
	}

	public function r_grading_equivalents()
	{
		return $this->hasMany(RGradingEquivalent::class, 'COURSE');
	}

	public function r_grading_equivalent_gs()
	{
		return $this->hasMany(RGradingEquivalentG::class, 'COURSE');
	}

	public function r_room_courses()
	{
		return $this->hasMany(RRoomCourse::class, 'COURSE');
	}

	public function r_sections()
	{
		return $this->hasMany(RSection::class, 'COURSE');
	}

	public function t_adjustment_fees()
	{
		return $this->hasMany(TAdjustmentFee::class, 'COURSE');
	}

	public function t_compre_fees()
	{
		return $this->hasMany(TCompreFee::class, 'PROGRAM');
	}

	public function t_compre_grades()
	{
		return $this->hasMany(TCompreGrade::class, 'COURSE');
	}

	public function t_fee_courses()
	{
		return $this->hasMany(TFeeCourse::class, 'COURSE');
	}

	public function t_interviews()
	{
		return $this->hasMany(TInterview::class, 'PROGRAM');
	}

	public function t_interview_gs()
	{
		return $this->hasMany(TInterviewG::class, 'PROGRAM');
	}

	public function t_section_offering_opens()
	{
		return $this->hasMany(TSectionOfferingOpen::class, 'COURSE');
	}

	public function t_students()
	{
		return $this->hasMany(TStudent::class, 'REMEDIAL_COURSE');
	}

	public function t_tuition_fees()
	{
		return $this->hasMany(TTuitionFee::class, 'COURSE');
	}
}
