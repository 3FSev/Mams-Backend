<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAssessmentSh
 * 
 * @property int $ID
 * @property int|null $SYSEM
 * @property int|null $ENROLLMENT_ID
 * @property int|null $STUDENT
 * @property int|null $GRADE_LVL
 * @property int|null $PAYMENT_SCHED_ID
 * @property Carbon|null $DATE_ASSESSED
 * @property int|null $ASSESSED_BY
 * 
 * @property Collection|TAssessmentShsLine[] $t_assessment_shs_lines
 *
 * @package App\Models
 */
class TAssessmentSh extends Model
{
	protected $table = 't_assessment_shs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SYSEM' => 'int',
		'ENROLLMENT_ID' => 'int',
		'STUDENT' => 'int',
		'GRADE_LVL' => 'int',
		'PAYMENT_SCHED_ID' => 'int',
		'DATE_ASSESSED' => 'datetime',
		'ASSESSED_BY' => 'int'
	];

	protected $fillable = [
		'SYSEM',
		'ENROLLMENT_ID',
		'STUDENT',
		'GRADE_LVL',
		'PAYMENT_SCHED_ID',
		'DATE_ASSESSED',
		'ASSESSED_BY'
	];

	public function t_assessment_shs_lines()
	{
		return $this->hasMany(TAssessmentShsLine::class, 'ASSESSMENT_ID');
	}
}
