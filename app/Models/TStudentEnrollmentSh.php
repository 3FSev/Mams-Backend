<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TStudentEnrollmentSh
 * 
 * @property int $ID
 * @property int|null $SYSEM
 * @property int|null $STUDENT
 * @property int|null $SECTION
 * 
 * @property TSySem|null $t_sy_sem
 * @property TStudent|null $t_student
 * @property RSectionBasic|null $r_section_basic
 * @property Collection|TStudentEnrollmentShsLine[] $t_student_enrollment_shs_lines
 *
 * @package App\Models
 */
class TStudentEnrollmentSh extends Model
{
	protected $table = 't_student_enrollment_shs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SYSEM' => 'int',
		'STUDENT' => 'int',
		'SECTION' => 'int'
	];

	protected $fillable = [
		'SYSEM',
		'STUDENT',
		'SECTION'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SYSEM');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function r_section_basic()
	{
		return $this->belongsTo(RSectionBasic::class, 'SECTION');
	}

	public function t_student_enrollment_shs_lines()
	{
		return $this->hasMany(TStudentEnrollmentShsLine::class, 'ENROLLMENT_ID');
	}
}
