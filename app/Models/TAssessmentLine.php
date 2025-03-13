<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAssessmentLine
 * 
 * @property int $ID
 * @property int|null $ASSESSMENT_ID
 * @property string|null $FEE_TYPE
 * @property int|null $ROOM_FEE
 * @property int|null $COURSE_FEE
 * @property int|null $SUBJECT_FEE
 * @property int|null $MANDATORY_FEE
 * @property int|null $TUITION_FEE
 * @property int|null $TOTAL_HR
 * @property float|null $AMOUNT
 * @property int|null $STUDENT_ID
 * @property int|null $USER_ID
 * @property int|null $FEE
 * @property string|null $ADJUSTMENT_STATUS
 * @property float|null $AMOUNT_CREDIT
 * @property Carbon|null $T_DATE
 * @property int|null $ADJUSTED_FEE
 * @property int|null $ORIGINAL_TUITION_HR
 * @property float|null $ORIGINAL_AMT
 * 
 * @property TAssessment|null $t_assessment
 * @property TTuitionFee|null $t_tuition_fee
 * @property TStudent|null $t_student
 * @property RFee|null $r_fee
 *
 * @package App\Models
 */
class TAssessmentLine extends Model
{
	protected $table = 't_assessment_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ASSESSMENT_ID' => 'int',
		'ROOM_FEE' => 'int',
		'COURSE_FEE' => 'int',
		'SUBJECT_FEE' => 'int',
		'MANDATORY_FEE' => 'int',
		'TUITION_FEE' => 'int',
		'TOTAL_HR' => 'int',
		'AMOUNT' => 'float',
		'STUDENT_ID' => 'int',
		'USER_ID' => 'int',
		'FEE' => 'int',
		'AMOUNT_CREDIT' => 'float',
		'T_DATE' => 'datetime',
		'ADJUSTED_FEE' => 'int',
		'ORIGINAL_TUITION_HR' => 'int',
		'ORIGINAL_AMT' => 'float'
	];

	protected $fillable = [
		'ASSESSMENT_ID',
		'FEE_TYPE',
		'ROOM_FEE',
		'COURSE_FEE',
		'SUBJECT_FEE',
		'MANDATORY_FEE',
		'TUITION_FEE',
		'TOTAL_HR',
		'AMOUNT',
		'STUDENT_ID',
		'USER_ID',
		'FEE',
		'ADJUSTMENT_STATUS',
		'AMOUNT_CREDIT',
		'T_DATE',
		'ADJUSTED_FEE',
		'ORIGINAL_TUITION_HR',
		'ORIGINAL_AMT'
	];

	public function t_assessment()
	{
		return $this->belongsTo(TAssessment::class, 'ASSESSMENT_ID');
	}

	public function t_tuition_fee()
	{
		return $this->belongsTo(TTuitionFee::class, 'TUITION_FEE');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT_ID');
	}

	public function r_fee()
	{
		return $this->belongsTo(RFee::class, 'FEE');
	}
}
