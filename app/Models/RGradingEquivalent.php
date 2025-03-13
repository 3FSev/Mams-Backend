<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RGradingEquivalent
 * 
 * @property int $ID
 * @property string|null $GRADE
 * @property string|null $EQUIVALENT
 * @property string|null $REMARKS
 * @property float|null $RANGEFROM
 * @property float|null $RANGETO
 * @property int|null $COURSE
 * @property string|null $STATUS
 * 
 * @property RCourse|null $r_course
 *
 * @package App\Models
 */
class RGradingEquivalent extends Model
{
	protected $table = 'r_grading_equivalent';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'RANGEFROM' => 'float',
		'RANGETO' => 'float',
		'COURSE' => 'int'
	];

	protected $fillable = [
		'GRADE',
		'EQUIVALENT',
		'REMARKS',
		'RANGEFROM',
		'RANGETO',
		'COURSE',
		'STATUS'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}
