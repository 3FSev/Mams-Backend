<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAdjustmentFee
 * 
 * @property int $ID
 * @property int|null $FEE
 * @property float|null $AMOUNT
 * @property string|null $FEE_CAT
 * @property string|null $ADJUSTMENT_TYPE
 * @property int|null $COURSE
 * @property string|null $STUDENT_TYPE
 * @property int|null $YR_LVL
 * @property string|null $ADMISSION_STATUS
 * @property int|null $SUBJECT
 * @property int|null $ROOM
 * @property int|null $STUDENT
 * @property int|null $SY_SEM
 * @property string|null $STATUS
 * @property Carbon|null $DATE
 * @property int|null $USER
 * 
 * @property RFee|null $r_fee
 * @property RCourse|null $r_course
 * @property RSubject|null $r_subject
 * @property RRoom|null $r_room
 * @property TStudent|null $t_student
 * @property TSySem|null $t_sy_sem
 *
 * @package App\Models
 */
class TAdjustmentFee extends Model
{
	protected $table = 't_adjustment_fee';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'FEE' => 'int',
		'AMOUNT' => 'float',
		'COURSE' => 'int',
		'YR_LVL' => 'int',
		'SUBJECT' => 'int',
		'ROOM' => 'int',
		'STUDENT' => 'int',
		'SY_SEM' => 'int',
		'DATE' => 'datetime',
		'USER' => 'int'
	];

	protected $fillable = [
		'FEE',
		'AMOUNT',
		'FEE_CAT',
		'ADJUSTMENT_TYPE',
		'COURSE',
		'STUDENT_TYPE',
		'YR_LVL',
		'ADMISSION_STATUS',
		'SUBJECT',
		'ROOM',
		'STUDENT',
		'SY_SEM',
		'STATUS',
		'DATE',
		'USER'
	];

	public function r_fee()
	{
		return $this->belongsTo(RFee::class, 'FEE');
	}

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}

	public function r_room()
	{
		return $this->belongsTo(RRoom::class, 'ROOM');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SY_SEM');
	}
}
