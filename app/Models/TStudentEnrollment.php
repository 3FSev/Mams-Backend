<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollment
 * 
 * @property int $ID
 * @property int|null $SY_SEM
 * @property int|null $STUDENT
 * @property int|null $YR_LVL
 * @property int|null $SECTION
 * @property string|null $PROGRAM_TYPE
 * 
 * @property TSySem|null $t_sy_sem
 * @property TStudent|null $t_student
 * @property Collection|TAssessment[] $t_assessments
 * @property Collection|TStudentEnrollmentLine[] $t_student_enrollment_lines
 * @property Collection|TStudentGrade[] $t_student_grades
 *
 * @package App\Models
 */
class TStudentEnrollment extends Model
{
	protected $table = 't_student_enrollment';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY_SEM' => 'int',
		'STUDENT' => 'int',
		'YR_LVL' => 'int',
		'SECTION' => 'int'
	];

	protected $fillable = [
		'SY_SEM',
		'STUDENT',
		'YR_LVL',
		'SECTION',
		'PROGRAM_TYPE'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function t_assessments()
	{
		return $this->hasMany(TAssessment::class, 'ENROLLMENT_ID');
	}

	public function t_student_enrollment_lines()
	{
		return $this->hasMany(TStudentEnrollmentLine::class, 'ENROLLMENT_ID');
	}

	public function t_student_grades()
	{
		return $this->hasMany(TStudentGrade::class, 'ENROLLMENT_ID');
	}
}
