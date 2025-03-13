<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TInterview
 * 
 * @property int $ID
 * @property int|null $APPLICANTID
 * @property int|null $INTERVIEWER
 * @property int|null $PROGRAM
 * @property string|null $EVALUATION
 * @property string|null $RESULT
 * 
 * @property TApplicant|null $t_applicant
 * @property RUser|null $r_user
 * @property RCourse|null $r_course
 *
 * @package App\Models
 */
class TInterview extends Model
{
	protected $table = 't_interview';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANTID' => 'int',
		'INTERVIEWER' => 'int',
		'PROGRAM' => 'int'
	];

	protected $fillable = [
		'APPLICANTID',
		'INTERVIEWER',
		'PROGRAM',
		'EVALUATION',
		'RESULT'
	];

	public function t_applicant()
	{
		return $this->belongsTo(TApplicant::class, 'APPLICANTID');
	}

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'INTERVIEWER');
	}

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'PROGRAM');
	}
}
