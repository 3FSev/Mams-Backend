<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumLinePrereq
 * 
 * @property int $ID
 * @property int $CURR_LINE_ID
 * @property int $SUBJECT_CURR_ID
 * @property string|null $GRADE
 * @property int|null $YR_LVL
 * @property int|null $YRLVL_PREREQ
 * @property int|null $REQUIRED_UNITS_IN_CURRICULUM
 * @property float|null $PASSING_GRADE
 * @property string|null $PREREQ_TYPE
 * 
 * @property RCurriculumLine $r_curriculum_line
 *
 * @package App\Models
 */
class RCurriculumLinePrereq extends Model
{
	protected $table = 'r_curriculum_line_prereq';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CURR_LINE_ID' => 'int',
		'SUBJECT_CURR_ID' => 'int',
		'YR_LVL' => 'int',
		'YRLVL_PREREQ' => 'int',
		'REQUIRED_UNITS_IN_CURRICULUM' => 'int',
		'PASSING_GRADE' => 'float'
	];

	protected $fillable = [
		'CURR_LINE_ID',
		'SUBJECT_CURR_ID',
		'GRADE',
		'YR_LVL',
		'YRLVL_PREREQ',
		'REQUIRED_UNITS_IN_CURRICULUM',
		'PASSING_GRADE',
		'PREREQ_TYPE'
	];

	public function r_curriculum_line()
	{
		return $this->belongsTo(RCurriculumLine::class, 'CURR_LINE_ID');
	}
}
