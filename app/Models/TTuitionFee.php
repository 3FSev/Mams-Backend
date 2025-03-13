<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTuitionFee
 * 
 * @property int $ID
 * @property float $AMOUNT
 * @property int $COURSE
 * @property string|null $STATUS
 * @property int|null $YR_LVL
 * @property int|null $SY_SEM
 * @property string|null $ADMISSION_STATUS
 * 
 * @property RCourse $r_course
 * @property Collection|TAssessmentLine[] $t_assessment_lines
 *
 * @package App\Models
 */
class TTuitionFee extends Model
{
	protected $table = 't_tuition_fee';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'AMOUNT' => 'float',
		'COURSE' => 'int',
		'YR_LVL' => 'int',
		'SY_SEM' => 'int'
	];

	protected $fillable = [
		'AMOUNT',
		'COURSE',
		'STATUS',
		'YR_LVL',
		'SY_SEM',
		'ADMISSION_STATUS'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}

	public function t_assessment_lines()
	{
		return $this->hasMany(TAssessmentLine::class, 'TUITION_FEE');
	}
}
