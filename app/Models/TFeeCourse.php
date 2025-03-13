<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFeeCourse
 * 
 * @property int $ID
 * @property int $SY_SEM
 * @property string|null $STUDENT_TYPE
 * @property int $FEE
 * @property int $YR_LVL
 * @property int $COURSE
 * @property float $AMOUNT
 * @property string|null $STATUS
 * @property string|null $ADMISSION_STATUS
 * 
 * @property TSySem $t_sy_sem
 * @property RFee $r_fee
 * @property RCourse $r_course
 *
 * @package App\Models
 */
class TFeeCourse extends Model
{
	protected $table = 't_fee_course';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY_SEM' => 'int',
		'FEE' => 'int',
		'YR_LVL' => 'int',
		'COURSE' => 'int',
		'AMOUNT' => 'float'
	];

	protected $fillable = [
		'SY_SEM',
		'STUDENT_TYPE',
		'FEE',
		'YR_LVL',
		'COURSE',
		'AMOUNT',
		'STATUS',
		'ADMISSION_STATUS'
	];

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}

	public function r_fee()
	{
		return $this->belongsTo(RFee::class, 'FEE');
	}

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}
