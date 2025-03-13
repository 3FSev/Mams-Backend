<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollmentBasic
 * 
 * @property int $ID
 * @property int|null $SY
 * @property int|null $STUDENT
 * @property int|null $SECTION
 * @property int|null $SECTION_OFFERING_ELEM_ID
 * @property int|null $GRADE_LVL
 * @property string|null $STATUS
 * @property Carbon|null $DATE_ENROLLED
 * @property int|null $ENROLLED_BY
 * 
 * @property RSy|null $r_sy
 * @property TStudent|null $t_student
 * @property RSectionBasic|null $r_section_basic
 * @property TSectionOfferingElem|null $t_section_offering_elem
 * @property Collection|TAssessmentElem[] $t_assessment_elems
 *
 * @package App\Models
 */
class TStudentEnrollmentBasic extends Model
{
	protected $table = 't_student_enrollment_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY' => 'int',
		'STUDENT' => 'int',
		'SECTION' => 'int',
		'SECTION_OFFERING_ELEM_ID' => 'int',
		'GRADE_LVL' => 'int',
		'DATE_ENROLLED' => 'datetime',
		'ENROLLED_BY' => 'int'
	];

	protected $fillable = [
		'SY',
		'STUDENT',
		'SECTION',
		'SECTION_OFFERING_ELEM_ID',
		'GRADE_LVL',
		'STATUS',
		'DATE_ENROLLED',
		'ENROLLED_BY'
	];

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function r_section_basic()
	{
		return $this->belongsTo(RSectionBasic::class, 'SECTION');
	}

	public function t_section_offering_elem()
	{
		return $this->belongsTo(TSectionOfferingElem::class, 'SECTION_OFFERING_ELEM_ID');
	}

	public function t_assessment_elems()
	{
		return $this->hasMany(TAssessmentElem::class, 'ENROLLMENT_ID');
	}
}
