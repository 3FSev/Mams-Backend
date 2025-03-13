<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPaymentSched
 * 
 * @property int $ID
 * @property int|null $SYSEM
 * @property int|null $PAYMENT
 * @property float|null $TUITION_FEE
 * @property float|null $MISC_FEE
 * @property float|null $OTHER_FEE
 * @property string|null $SURCHARGE_TYPE
 * @property float|null $SURCHARGE
 * @property Carbon|null $STARTDATE
 * @property Carbon|null $DUEDATE
 * @property int|null $NO_PAYMENT
 * @property string|null $DESCRIPTION
 * @property string|null $PROGRAM_TYPE
 * @property float|null $AMOUNT
 * @property string|null $PAYMENT_TYPE
 * @property int|null $SY
 *
 * @package App\Models
 */
class TPaymentSched extends Model
{
	protected $table = 't_payment_sched';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SYSEM' => 'int',
		'PAYMENT' => 'int',
		'TUITION_FEE' => 'float',
		'MISC_FEE' => 'float',
		'OTHER_FEE' => 'float',
		'SURCHARGE' => 'float',
		'STARTDATE' => 'datetime',
		'DUEDATE' => 'datetime',
		'NO_PAYMENT' => 'int',
		'AMOUNT' => 'float',
		'SY' => 'int'
	];

	protected $fillable = [
		'SYSEM',
		'PAYMENT',
		'TUITION_FEE',
		'MISC_FEE',
		'OTHER_FEE',
		'SURCHARGE_TYPE',
		'SURCHARGE',
		'STARTDATE',
		'DUEDATE',
		'NO_PAYMENT',
		'DESCRIPTION',
		'PROGRAM_TYPE',
		'AMOUNT',
		'PAYMENT_TYPE',
		'SY'
	];
}
