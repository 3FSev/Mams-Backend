<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAssessmentElem
 * 
 * @property int $ID
 * @property int|null $SY
 * @property int|null $ENROLLMENT_ID
 * @property int|null $STUDENT
 * @property int|null $GRADE_LVL
 * @property int|null $PAYMENT_SCHED_ID
 * @property Carbon|null $DATE_ASSESSED
 * @property int|null $ASSESSED_BY
 * 
 * @property TStudentEnrollmentBasic|null $t_student_enrollment_basic
 * @property Collection|TAssessmentElemLine[] $t_assessment_elem_lines
 *
 * @package App\Models
 */
class TAssessmentElem extends Model
{
	protected $table = 't_assessment_elem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY' => 'int',
		'ENROLLMENT_ID' => 'int',
		'STUDENT' => 'int',
		'GRADE_LVL' => 'int',
		'PAYMENT_SCHED_ID' => 'int',
		'DATE_ASSESSED' => 'datetime',
		'ASSESSED_BY' => 'int'
	];

	protected $fillable = [
		'SY',
		'ENROLLMENT_ID',
		'STUDENT',
		'GRADE_LVL',
		'PAYMENT_SCHED_ID',
		'DATE_ASSESSED',
		'ASSESSED_BY'
	];

	public function t_student_enrollment_basic()
	{
		return $this->belongsTo(TStudentEnrollmentBasic::class, 'ENROLLMENT_ID');
	}

	public function t_assessment_elem_lines()
	{
		return $this->hasMany(TAssessmentElemLine::class, 'ASSESSMENT_ID');
	}
}
