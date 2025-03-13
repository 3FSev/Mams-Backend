<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSubject
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $DESCRIPTION
 * @property int $LEC_UNIT
 * @property int $LAB_UNIT
 * @property float $CREDITED_UNIT
 * @property int $LEC_HR
 * @property int $LAB_HR
 * @property int $TUITION_HR
 * @property string|null $ACADEMIC_TYPE
 * @property string|null $IS_NSTP
 * @property string|null $IS_ELECTIVE
 * @property string|null $IS_SPECIAL
 * @property string|null $PROGRAM_TYPE
 * @property int|null $DISCIPLINE
 * @property string|null $IS_NEW_GE
 * @property string|null $IS_EDUC
 * 
 * @property Collection|RCurriculumLine[] $r_curriculum_lines
 * @property Collection|REptSubject[] $r_ept_subjects
 * @property Collection|RGradingSystemSubj[] $r_grading_system_subjs
 * @property Collection|RSubjectEquivalencyManual[] $r_subject_equivalency_manuals
 * @property Collection|RSubjectGroup[] $r_subject_groups
 * @property Collection|TAdjustmentFee[] $t_adjustment_fees
 * @property Collection|TCompreLine[] $t_compre_lines
 * @property Collection|TFeeSubject[] $t_fee_subjects
 * @property Collection|TPenalty[] $t_penalties
 * @property Collection|TRemedial[] $t_remedials
 * @property Collection|TSectionOfferingSubject[] $t_section_offering_subjects
 *
 * @package App\Models
 */
class RSubject extends Model
{
	protected $table = 'r_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'LEC_UNIT' => 'int',
		'LAB_UNIT' => 'int',
		'CREDITED_UNIT' => 'float',
		'LEC_HR' => 'int',
		'LAB_HR' => 'int',
		'TUITION_HR' => 'int',
		'DISCIPLINE' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'LEC_UNIT',
		'LAB_UNIT',
		'CREDITED_UNIT',
		'LEC_HR',
		'LAB_HR',
		'TUITION_HR',
		'ACADEMIC_TYPE',
		'IS_NSTP',
		'IS_ELECTIVE',
		'IS_SPECIAL',
		'PROGRAM_TYPE',
		'DISCIPLINE',
		'IS_NEW_GE',
		'IS_EDUC'
	];

	public function r_curriculum_lines()
	{
		return $this->hasMany(RCurriculumLine::class, 'SUBJECT');
	}

	public function r_ept_subjects()
	{
		return $this->hasMany(REptSubject::class, 'REPLACEMENT_FOR');
	}

	public function r_grading_system_subjs()
	{
		return $this->hasMany(RGradingSystemSubj::class, 'SUBJECT');
	}

	public function r_subject_equivalency_manuals()
	{
		return $this->hasMany(RSubjectEquivalencyManual::class, 'SUBJECT_ID');
	}

	public function r_subject_groups()
	{
		return $this->hasMany(RSubjectGroup::class, 'SUB');
	}

	public function t_adjustment_fees()
	{
		return $this->hasMany(TAdjustmentFee::class, 'SUBJECT');
	}

	public function t_compre_lines()
	{
		return $this->hasMany(TCompreLine::class, 'SUBJECT');
	}

	public function t_fee_subjects()
	{
		return $this->hasMany(TFeeSubject::class, 'SUBJECT');
	}

	public function t_penalties()
	{
		return $this->hasMany(TPenalty::class, 'SUBJECT');
	}

	public function t_remedials()
	{
		return $this->hasMany(TRemedial::class, 'SUBJECT');
	}

	public function t_section_offering_subjects()
	{
		return $this->hasMany(TSectionOfferingSubject::class, 'SUBJECT');
	}
}
