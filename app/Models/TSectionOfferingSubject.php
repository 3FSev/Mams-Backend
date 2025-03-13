<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingSubject
 * 
 * @property int $ID
 * @property int $SECTION_OFFERING_ID
 * @property int $SUBJECT
 * @property int|null $SLOTS
 * @property string|null $SECTION_CODE
 * @property string|null $IS_OPEN
 * @property string|null $IS_OPEN_COURSE
 * @property string|null $IS_TUTORIAL
 * @property string|null $IS_PETITION
 * @property Carbon $TIMESTAMP
 * @property int|null $ENCODED_BY
 * 
 * @property TSectionOffering $t_section_offering
 * @property RSubject $r_subject
 * @property Collection|TFacultyLoad[] $t_faculty_loads
 * @property Collection|TSectionOfferingSubjectLine[] $t_section_offering_subject_lines
 * @property Collection|TStudentEnrollmentLine[] $t_student_enrollment_lines
 *
 * @package App\Models
 */
class TSectionOfferingSubject extends Model
{
	protected $table = 't_section_offering_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_ID' => 'int',
		'SUBJECT' => 'int',
		'SLOTS' => 'int',
		'TIMESTAMP' => 'datetime',
		'ENCODED_BY' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_ID',
		'SUBJECT',
		'SLOTS',
		'SECTION_CODE',
		'IS_OPEN',
		'IS_OPEN_COURSE',
		'IS_TUTORIAL',
		'IS_PETITION',
		'TIMESTAMP',
		'ENCODED_BY'
	];

	public function t_section_offering()
	{
		return $this->belongsTo(TSectionOffering::class, 'SECTION_OFFERING_ID');
	}

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}

	public function t_faculty_loads()
	{
		return $this->hasMany(TFacultyLoad::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function t_section_offering_subject_lines()
	{
		return $this->hasMany(TSectionOfferingSubjectLine::class, 'SECTION_OFFERING_SUBJECT_ID');
	}

	public function t_student_enrollment_lines()
	{
		return $this->hasMany(TStudentEnrollmentLine::class, 'SECTION_OFFERING_LINE');
	}
}
