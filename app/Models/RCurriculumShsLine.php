<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumShsLine
 * 
 * @property int $ID
 * @property int|null $CURR_ID
 * @property int|null $SUBJECT
 * @property int|null $GRADE_LVL
 * @property string|null $TERM
 * 
 * @property RCurriculumSh|null $r_curriculum_sh
 * @property RSubjectBasic|null $r_subject_basic
 * @property Collection|RCurriculumShsCo[] $r_curriculum_shs_cos
 * @property Collection|RCurriculumShsPre[] $r_curriculum_shs_pres
 *
 * @package App\Models
 */
class RCurriculumShsLine extends Model
{
	protected $table = 'r_curriculum_shs_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CURR_ID' => 'int',
		'SUBJECT' => 'int',
		'GRADE_LVL' => 'int'
	];

	protected $fillable = [
		'CURR_ID',
		'SUBJECT',
		'GRADE_LVL',
		'TERM'
	];

	public function r_curriculum_sh()
	{
		return $this->belongsTo(RCurriculumSh::class, 'CURR_ID');
	}

	public function r_subject_basic()
	{
		return $this->belongsTo(RSubjectBasic::class, 'SUBJECT');
	}

	public function r_curriculum_shs_cos()
	{
		return $this->hasMany(RCurriculumShsCo::class, 'TO_CURR_LINE_ID');
	}

	public function r_curriculum_shs_pres()
	{
		return $this->hasMany(RCurriculumShsPre::class, 'TO_CURR_LINE_ID');
	}
}
