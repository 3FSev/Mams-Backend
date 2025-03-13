<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAssessmentElemLine
 * 
 * @property int $ID
 * @property int|null $ASSESSMENT_ID
 * @property int|null $FEE
 * @property float|null $AMOUNT
 * @property int|null $T_FEE_ID
 * @property string|null $FEE_TYPE
 * @property int|null $USER_ID
 * @property string|null $STATUS
 * @property string|null $ADJUSTMENT_STATUS
 * @property float|null $CREDIT_AMOUNT
 * @property Carbon|null $T_DATE
 * @property int|null $ADJUSTED_FEE
 * 
 * @property TAssessmentElem|null $t_assessment_elem
 *
 * @package App\Models
 */
class TAssessmentElemLine extends Model
{
	protected $table = 't_assessment_elem_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ASSESSMENT_ID' => 'int',
		'FEE' => 'int',
		'AMOUNT' => 'float',
		'T_FEE_ID' => 'int',
		'USER_ID' => 'int',
		'CREDIT_AMOUNT' => 'float',
		'T_DATE' => 'datetime',
		'ADJUSTED_FEE' => 'int'
	];

	protected $fillable = [
		'ASSESSMENT_ID',
		'FEE',
		'AMOUNT',
		'T_FEE_ID',
		'FEE_TYPE',
		'USER_ID',
		'STATUS',
		'ADJUSTMENT_STATUS',
		'CREDIT_AMOUNT',
		'T_DATE',
		'ADJUSTED_FEE'
	];

	public function t_assessment_elem()
	{
		return $this->belongsTo(TAssessmentElem::class, 'ASSESSMENT_ID');
	}
}
