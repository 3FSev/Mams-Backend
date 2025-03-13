<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RFee
 * 
 * @property int $ID
 * @property string $FEE_TYPE
 * @property string $CODE
 * @property string $DESCRIPTION
 * @property string|null $IS_MANDATORY
 * @property string|null $IS_CHARGE_ONCE
 * @property string|null $NO_SURCHARGE
 * @property int $PRIORITY_LVL
 * @property string|null $STATUS
 * @property Carbon|null $EFFECTIVITY_DATE
 * @property float|null $AMOUNTS
 * @property string|null $ISDISCOUNTABLE
 * 
 * @property Collection|TAdjustmentFee[] $t_adjustment_fees
 * @property Collection|TAssessmentLine[] $t_assessment_lines
 * @property Collection|TFeeCourse[] $t_fee_courses
 * @property Collection|TFeeMandatory[] $t_fee_mandatories
 * @property Collection|TFeeRoom[] $t_fee_rooms
 * @property Collection|TFeeSubject[] $t_fee_subjects
 *
 * @package App\Models
 */
class RFee extends Model
{
	protected $table = 'r_fee';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PRIORITY_LVL' => 'int',
		'EFFECTIVITY_DATE' => 'datetime',
		'AMOUNTS' => 'float'
	];

	protected $fillable = [
		'FEE_TYPE',
		'CODE',
		'DESCRIPTION',
		'IS_MANDATORY',
		'IS_CHARGE_ONCE',
		'NO_SURCHARGE',
		'PRIORITY_LVL',
		'STATUS',
		'EFFECTIVITY_DATE',
		'AMOUNTS',
		'ISDISCOUNTABLE'
	];

	public function t_adjustment_fees()
	{
		return $this->hasMany(TAdjustmentFee::class, 'FEE');
	}

	public function t_assessment_lines()
	{
		return $this->hasMany(TAssessmentLine::class, 'FEE');
	}

	public function t_fee_courses()
	{
		return $this->hasMany(TFeeCourse::class, 'FEE');
	}

	public function t_fee_mandatories()
	{
		return $this->hasMany(TFeeMandatory::class, 'FEE');
	}

	public function t_fee_rooms()
	{
		return $this->hasMany(TFeeRoom::class, 'FEE');
	}

	public function t_fee_subjects()
	{
		return $this->hasMany(TFeeSubject::class, 'FEE');
	}
}
