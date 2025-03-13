<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingElem
 * 
 * @property int $ID
 * @property int|null $SECTION
 * @property int|null $GRADE_LVL
 * @property int|null $SY
 * @property int|null $CURRICULUM
 * @property int|null $CAMPUS
 * @property string|null $PROGRAM_TYPE
 * 
 * @property RSectionBasic|null $r_section_basic
 * @property RSy|null $r_sy
 * @property RCurriculumElem|null $r_curriculum_elem
 * @property RCampus|null $r_campus
 * @property Collection|TSectionOfferingElemSubject[] $t_section_offering_elem_subjects
 * @property Collection|TStudentEnrollmentBasic[] $t_student_enrollment_basics
 *
 * @package App\Models
 */
class TSectionOfferingElem extends Model
{
	protected $table = 't_section_offering_elem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION' => 'int',
		'GRADE_LVL' => 'int',
		'SY' => 'int',
		'CURRICULUM' => 'int',
		'CAMPUS' => 'int'
	];

	protected $fillable = [
		'SECTION',
		'GRADE_LVL',
		'SY',
		'CURRICULUM',
		'CAMPUS',
		'PROGRAM_TYPE'
	];

	public function r_section_basic()
	{
		return $this->belongsTo(RSectionBasic::class, 'SECTION');
	}

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}

	public function r_curriculum_elem()
	{
		return $this->belongsTo(RCurriculumElem::class, 'CURRICULUM');
	}

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}

	public function t_section_offering_elem_subjects()
	{
		return $this->hasMany(TSectionOfferingElemSubject::class, 'SECTION_OFFERING_ID');
	}

	public function t_student_enrollment_basics()
	{
		return $this->hasMany(TStudentEnrollmentBasic::class, 'SECTION_OFFERING_ELEM_ID');
	}
}
