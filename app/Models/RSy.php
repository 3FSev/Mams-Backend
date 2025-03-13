<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSy
 * 
 * @property int $CODE
 * @property string $DESCRIPTION
 * @property string|null $STATUS
 * 
 * @property Collection|RCurriculumG[] $r_curriculum_gs
 * @property Collection|RSystemConfigScheduleBasic[] $r_system_config_schedule_basics
 * @property Collection|TFeeBasic[] $t_fee_basics
 * @property Collection|TFeeBasicAdjustment[] $t_fee_basic_adjustments
 * @property Collection|TSectionAssignment[] $t_section_assignments
 * @property Collection|TSectionOfferingElem[] $t_section_offering_elems
 * @property Collection|TStudentEnrollmentBasic[] $t_student_enrollment_basics
 * @property Collection|TSySem[] $t_sy_sems
 *
 * @package App\Models
 */
class RSy extends Model
{
	protected $table = 'r_sy';
	protected $primaryKey = 'CODE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CODE' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'STATUS'
	];

	public function r_curriculum_gs()
	{
		return $this->hasMany(RCurriculumG::class, 'SY');
	}

	public function r_system_config_schedule_basics()
	{
		return $this->hasMany(RSystemConfigScheduleBasic::class, 'SY');
	}

	public function t_fee_basics()
	{
		return $this->hasMany(TFeeBasic::class, 'SY');
	}

	public function t_fee_basic_adjustments()
	{
		return $this->hasMany(TFeeBasicAdjustment::class, 'SY');
	}

	public function t_section_assignments()
	{
		return $this->hasMany(TSectionAssignment::class, 'SY');
	}

	public function t_section_offering_elems()
	{
		return $this->hasMany(TSectionOfferingElem::class, 'SY');
	}

	public function t_student_enrollment_basics()
	{
		return $this->hasMany(TStudentEnrollmentBasic::class, 'SY');
	}

	public function t_sy_sems()
	{
		return $this->hasMany(TSySem::class, 'SY', 'CODE');
	}
}
