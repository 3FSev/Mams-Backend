<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSySem
 * 
 * @property int $ID
 * @property string $CODE
 * @property int $SY
 * @property string $TERM
 * @property string $STATUS
 * 
 * @property RSy $r_sy
 * @property Collection|RSystemConfigSchedule[] $r_system_config_schedules
 * @property Collection|RSystemConfigScheduleSh[] $r_system_config_schedule_shes
 * @property Collection|TAdjustmentFee[] $t_adjustment_fees
 * @property Collection|TAssessment[] $t_assessments
 * @property Collection|TCompreFee[] $t_compre_fees
 * @property Collection|TFeeBasic[] $t_fee_basics
 * @property Collection|TFeeBasicAdjustment[] $t_fee_basic_adjustments
 * @property Collection|TFeeCourse[] $t_fee_courses
 * @property Collection|TFeeMandatory[] $t_fee_mandatories
 * @property Collection|TFeeRoom[] $t_fee_rooms
 * @property Collection|TFeeSubject[] $t_fee_subjects
 * @property Collection|TSectionAssignment[] $t_section_assignments
 * @property Collection|TSectionOffering[] $t_section_offerings
 * @property Collection|TSectionOfferingSh[] $t_section_offering_shes
 * @property Collection|TStudentEnrollment[] $t_student_enrollments
 * @property Collection|TStudentEnrollmentSh[] $t_student_enrollment_shes
 *
 * @package App\Models
 */
class TSySem extends Model
{
	protected $table = 't_sy_sem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY' => 'int'
	];

	protected $fillable = [
		'CODE',
		'SY',
		'TERM',
		'STATUS'
	];

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}

	public function r_system_config_schedules()
	{
		return $this->hasMany(RSystemConfigSchedule::class, 'SY_SEM');
	}

	public function r_system_config_schedule_shes()
	{
		return $this->hasMany(RSystemConfigScheduleSh::class, 'SY_SEM');
	}

	public function t_adjustment_fees()
	{
		return $this->hasMany(TAdjustmentFee::class, 'SY_SEM');
	}

	public function t_assessments()
	{
		return $this->hasMany(TAssessment::class, 'SY_SEM');
	}

	public function t_compre_fees()
	{
		return $this->hasMany(TCompreFee::class, 'SY_SEM');
	}

	public function t_fee_basics()
	{
		return $this->hasMany(TFeeBasic::class, 'SYSEM');
	}

	public function t_fee_basic_adjustments()
	{
		return $this->hasMany(TFeeBasicAdjustment::class, 'SYSEM');
	}

	public function t_fee_courses()
	{
		return $this->hasMany(TFeeCourse::class, 'SY_SEM');
	}

	public function t_fee_mandatories()
	{
		return $this->hasMany(TFeeMandatory::class, 'SY_SEM');
	}

	public function t_fee_rooms()
	{
		return $this->hasMany(TFeeRoom::class, 'SY_SEM');
	}

	public function t_fee_subjects()
	{
		return $this->hasMany(TFeeSubject::class, 'SY_SEM');
	}

	public function t_section_assignments()
	{
		return $this->hasMany(TSectionAssignment::class, 'SYSEM');
	}

	public function t_section_offerings()
	{
		return $this->hasMany(TSectionOffering::class, 'SY_SEM');
	}

	public function t_section_offering_shes()
	{
		return $this->hasMany(TSectionOfferingSh::class, 'SYSEM');
	}

	public function t_student_enrollments()
	{
		return $this->hasMany(TStudentEnrollment::class, 'SY_SEM');
	}

	public function t_student_enrollment_shes()
	{
		return $this->hasMany(TStudentEnrollmentSh::class, 'SYSEM');
	}
}
