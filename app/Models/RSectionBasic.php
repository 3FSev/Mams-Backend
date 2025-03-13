<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSectionBasic
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property int|null $GRADE_LVL
 * @property int|null $TRACK
 * @property int|null $STRAND
 * @property int|null $SLOTS
 * @property string|null $CLASS_TYPE
 * @property int|null $CAMPUS
 * 
 * @property Collection|TSectionAssignment[] $t_section_assignments
 * @property Collection|TSectionOfferingElem[] $t_section_offering_elems
 * @property Collection|TSectionOfferingSh[] $t_section_offering_shes
 * @property Collection|TStudentEnrollmentBasic[] $t_student_enrollment_basics
 * @property Collection|TStudentEnrollmentSh[] $t_student_enrollment_shes
 *
 * @package App\Models
 */
class RSectionBasic extends Model
{
	protected $table = 'r_section_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'GRADE_LVL' => 'int',
		'TRACK' => 'int',
		'STRAND' => 'int',
		'SLOTS' => 'int',
		'CAMPUS' => 'int'
	];

	protected $fillable = [
		'CODE',
		'GRADE_LVL',
		'TRACK',
		'STRAND',
		'SLOTS',
		'CLASS_TYPE',
		'CAMPUS'
	];

	public function t_section_assignments()
	{
		return $this->hasMany(TSectionAssignment::class, 'SECTION');
	}

	public function t_section_offering_elems()
	{
		return $this->hasMany(TSectionOfferingElem::class, 'SECTION');
	}

	public function t_section_offering_shes()
	{
		return $this->hasMany(TSectionOfferingSh::class, 'SECTION');
	}

	public function t_student_enrollment_basics()
	{
		return $this->hasMany(TStudentEnrollmentBasic::class, 'SECTION');
	}

	public function t_student_enrollment_shes()
	{
		return $this->hasMany(TStudentEnrollmentSh::class, 'SECTION');
	}
}
