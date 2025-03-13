<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SysConfigMaxUnit
 * 
 * @property int|null $MAX_UNIT
 * @property float|null $CHARGE_FOR_CHANGE
 * @property float|null $CHARGE_FOR_DELETE
 * @property string|null $YEAR_LEVELLING
 * @property string|null $GRADING_SYSTEM_COLGS
 * @property string|null $FACULTY_TYPE
 * @property string|null $COREQUISITE
 * @property string|null $GRADE_TYPE
 * @property string|null $IS_SEMESTER
 * @property string|null $IS_INC_PASSED
 * @property string|null $PAYMENT_DISTRIBUTION
 * @property int|null $highest_grade
 * @property int|null $lowest_grade
 * @property int|null $highest_gradeEA
 * @property int|null $lowest_gradeEA
 * @property int|null $ONLINEBASIC
 * @property int|null $ONLINESHS
 * @property int|null $reglowest_gradeEA
 *
 * @package App\Models
 */
class SysConfigMaxUnit extends Model
{
	protected $table = 'sys_config_max_units';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MAX_UNIT' => 'int',
		'CHARGE_FOR_CHANGE' => 'float',
		'CHARGE_FOR_DELETE' => 'float',
		'highest_grade' => 'int',
		'lowest_grade' => 'int',
		'highest_gradeEA' => 'int',
		'lowest_gradeEA' => 'int',
		'ONLINEBASIC' => 'int',
		'ONLINESHS' => 'int',
		'reglowest_gradeEA' => 'int'
	];

	protected $fillable = [
		'MAX_UNIT',
		'CHARGE_FOR_CHANGE',
		'CHARGE_FOR_DELETE',
		'YEAR_LEVELLING',
		'GRADING_SYSTEM_COLGS',
		'FACULTY_TYPE',
		'COREQUISITE',
		'GRADE_TYPE',
		'IS_SEMESTER',
		'IS_INC_PASSED',
		'PAYMENT_DISTRIBUTION',
		'highest_grade',
		'lowest_grade',
		'highest_gradeEA',
		'lowest_gradeEA',
		'ONLINEBASIC',
		'ONLINESHS',
		'reglowest_gradeEA'
	];
}
