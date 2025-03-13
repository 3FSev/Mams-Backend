<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TEnrollmentAdjustment
 * 
 * @property int $id
 * @property int|null $sysem
 * @property string|null $program_type
 * @property int|null $enrollment_id
 * @property int|null $sos_id
 * @property Carbon|null $date_time_log
 * @property int|null $process_by
 * @property string|null $transaction_type
 * @property int|null $no_of_tuition_hrs
 * @property string|null $is_debit
 * @property float|null $amount
 *
 * @package App\Models
 */
class TEnrollmentAdjustment extends Model
{
	protected $table = 't_enrollment_adjustment';
	public $timestamps = false;

	protected $casts = [
		'sysem' => 'int',
		'enrollment_id' => 'int',
		'sos_id' => 'int',
		'date_time_log' => 'datetime',
		'process_by' => 'int',
		'no_of_tuition_hrs' => 'int',
		'amount' => 'float'
	];

	protected $fillable = [
		'sysem',
		'program_type',
		'enrollment_id',
		'sos_id',
		'date_time_log',
		'process_by',
		'transaction_type',
		'no_of_tuition_hrs',
		'is_debit',
		'amount'
	];
}
