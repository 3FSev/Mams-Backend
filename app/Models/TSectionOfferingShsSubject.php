<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingShsSubject
 * 
 * @property int $ID
 * @property int|null $SECTION_OFFERING
 * @property int|null $SUBJECT
 * @property int|null $SLOTS
 * 
 * @property TSectionOfferingSh|null $t_section_offering_sh
 * @property RSubjectBasic|null $r_subject_basic
 * @property Collection|TFacultyLoadSh[] $t_faculty_load_shes
 * @property Collection|TSectionOfferingShsSubjectLine[] $t_section_offering_shs_subject_lines
 * @property Collection|TStudentEnrollmentShsLine[] $t_student_enrollment_shs_lines
 *
 * @package App\Models
 */
class TSectionOfferingShsSubject extends Model
{
	protected $table = 't_section_offering_shs_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING' => 'int',
		'SUBJECT' => 'int',
		'SLOTS' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING',
		'SUBJECT',
		'SLOTS'
	];

	public function t_section_offering_sh()
	{
		return $this->belongsTo(TSectionOfferingSh::class, 'SECTION_OFFERING');
	}

	public function r_subject_basic()
	{
		return $this->belongsTo(RSubjectBasic::class, 'SUBJECT');
	}

	public function t_faculty_load_shes()
	{
		return $this->hasMany(TFacultyLoadSh::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function t_section_offering_shs_subject_lines()
	{
		return $this->hasMany(TSectionOfferingShsSubjectLine::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function t_student_enrollment_shs_lines()
	{
		return $this->hasMany(TStudentEnrollmentShsLine::class, 'SECTION_OFFERING_SUBJECT');
	}
}
