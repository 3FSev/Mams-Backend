<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumElemLine
 * 
 * @property int $ID
 * @property int|null $CURR_ID
 * @property int|null $SUBJECT
 * @property int|null $GRADE_LVL
 * 
 * @property RCurriculumElem|null $r_curriculum_elem
 * @property RSubjectBasic|null $r_subject_basic
 *
 * @package App\Models
 */
class RCurriculumElemLine extends Model
{
	protected $table = 'r_curriculum_elem_line';
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
		'GRADE_LVL'
	];

	public function r_curriculum_elem()
	{
		return $this->belongsTo(RCurriculumElem::class, 'CURR_ID');
	}

	public function r_subject_basic()
	{
		return $this->belongsTo(RSubjectBasic::class, 'SUBJECT');
	}
}
