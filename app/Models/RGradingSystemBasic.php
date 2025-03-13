<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RGradingSystemBasic
 * 
 * @property int $ID
 * @property int|null $GRADE_LVL
 * @property int|null $PERIOD
 * @property int|null $SUBJECT
 * @property string|null $LABEL
 * @property float|null $PERCENTAGE
 * @property string|null $STATUS
 * @property string|null $is_multiple
 * 
 * @property RSubjectBasic|null $r_subject_basic
 *
 * @package App\Models
 */
class RGradingSystemBasic extends Model
{
	protected $table = 'r_grading_system_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'GRADE_LVL' => 'int',
		'PERIOD' => 'int',
		'SUBJECT' => 'int',
		'PERCENTAGE' => 'float'
	];

	protected $fillable = [
		'GRADE_LVL',
		'PERIOD',
		'SUBJECT',
		'LABEL',
		'PERCENTAGE',
		'STATUS',
		'is_multiple'
	];

	public function r_subject_basic()
	{
		return $this->belongsTo(RSubjectBasic::class, 'SUBJECT');
	}
}
