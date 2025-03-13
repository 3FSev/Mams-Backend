<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TInterviewBasic
 * 
 * @property int $ID
 * @property int|null $APPLICANTID
 * @property int|null $INTERVIEWER
 * @property int|null $GRADE_LVL
 * @property string|null $EVALUATION
 * @property string|null $RESULT
 * @property Carbon $DATE_ADDED
 * 
 * @property TApplicant|null $t_applicant
 * @property RUser|null $r_user
 *
 * @package App\Models
 */
class TInterviewBasic extends Model
{
	protected $table = 't_interview_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANTID' => 'int',
		'INTERVIEWER' => 'int',
		'GRADE_LVL' => 'int',
		'DATE_ADDED' => 'datetime'
	];

	protected $fillable = [
		'APPLICANTID',
		'INTERVIEWER',
		'GRADE_LVL',
		'EVALUATION',
		'RESULT',
		'DATE_ADDED'
	];

	public function t_applicant()
	{
		return $this->belongsTo(TApplicant::class, 'APPLICANTID');
	}

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'INTERVIEWER');
	}
}
