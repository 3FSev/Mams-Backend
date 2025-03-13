<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RSubjectBasic
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * @property float|null $UNIT
 * @property int|null $GRADE_LVL
 * @property string|null $IS_ACADEMIC
 * 
 * @property Collection|RCurriculumElemLine[] $r_curriculum_elem_lines
 * @property Collection|RCurriculumShsLine[] $r_curriculum_shs_lines
 * @property Collection|RGradingSystemBasic[] $r_grading_system_basics
 * @property Collection|RSubjectBasicGroup[] $r_subject_basic_groups
 * @property Collection|TSectionOfferingElemSubject[] $t_section_offering_elem_subjects
 * @property Collection|TSectionOfferingShsSubject[] $t_section_offering_shs_subjects
 *
 * @package App\Models
 */
class RSubjectBasic extends Model
{
	protected $table = 'r_subject_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'UNIT' => 'float',
		'GRADE_LVL' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'UNIT',
		'GRADE_LVL',
		'IS_ACADEMIC'
	];

	public function r_curriculum_elem_lines()
	{
		return $this->hasMany(RCurriculumElemLine::class, 'SUBJECT');
	}

	public function r_curriculum_shs_lines()
	{
		return $this->hasMany(RCurriculumShsLine::class, 'SUBJECT');
	}

	public function r_grading_system_basics()
	{
		return $this->hasMany(RGradingSystemBasic::class, 'SUBJECT');
	}

	public function r_subject_basic_groups()
	{
		return $this->hasMany(RSubjectBasicGroup::class, 'SUB');
	}

	public function t_section_offering_elem_subjects()
	{
		return $this->hasMany(TSectionOfferingElemSubject::class, 'SUBJECT');
	}

	public function t_section_offering_shs_subjects()
	{
		return $this->hasMany(TSectionOfferingShsSubject::class, 'SUBJECT');
	}
}
