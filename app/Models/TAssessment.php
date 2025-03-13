<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAssessment
 * 
 * @property int $ID
 * @property int|null $ENROLLMENT_ID
 * @property int|null $SY_SEM
 * @property string|null $STUDENT_STATUS
 * @property int|null $STUDENT_ID
 * @property int|null $YR_LVL
 * @property int|null $PAYMENT_MODE
 * @property int|null $STATUS
 * @property Carbon|null $DATE_ASSESSED
 * @property string|null $PROGRAM_TYPE_OF_STUD
 * @property int|null $COURSE_
 * 
 * @property TStudentEnrollment|null $t_student_enrollment
 * @property TSySem|null $t_sy_sem
 * @property TStudent|null $t_student
 * @property Collection|TAssessmentLine[] $t_assessment_lines
 *
 * @package App\Models
 */
class TAssessment extends Model
{
	protected $table = 't_assessment';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ENROLLMENT_ID' => 'int',
		'SY_SEM' => 'int',
		'STUDENT_ID' => 'int',
		'YR_LVL' => 'int',
		'PAYMENT_MODE' => 'int',
		'STATUS' => 'int',
		'DATE_ASSESSED' => 'datetime',
		'COURSE_' => 'int'
	];

	protected $fillable = [
		'ENROLLMENT_ID',
		'SY_SEM',
		'STUDENT_STATUS',
		'STUDENT_ID',
		'YR_LVL',
		'PAYMENT_MODE',
		'STATUS',
		'DATE_ASSESSED',
		'PROGRAM_TYPE_OF_STUD',
		'COURSE_'
	];

	public function t_student_enrollment()
	{
		return $this->belongsTo(TStudentEnrollment::class, 'ENROLLMENT_ID');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}

	public function t_assessment_lines()
	{
		return $this->hasMany(TAssessmentLine::class, 'ASSESSMENT_ID');
	}
}
