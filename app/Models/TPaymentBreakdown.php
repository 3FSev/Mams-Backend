<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPaymentBreakdown
 * 
 * @property int $id
 * @property int|null $sysem
 * @property int|null $student_id
 * @property string|null $program_type
 * @property int|null $payment_id
 * @property int|null $no_of_payment
 * @property float|null $amount
 * @property float|null $original_amount
 * @property Carbon|null $date_added
 * @property Carbon|null $date_updated
 * @property int|null $sy
 *
 * @package App\Models
 */
class TPaymentBreakdown extends Model
{
	protected $table = 't_payment_breakdown';
	public $timestamps = false;

	protected $casts = [
		'sysem' => 'int',
		'student_id' => 'int',
		'payment_id' => 'int',
		'no_of_payment' => 'int',
		'amount' => 'float',
		'original_amount' => 'float',
		'date_added' => 'datetime',
		'date_updated' => 'datetime',
		'sy' => 'int'
	];

	protected $fillable = [
		'sysem',
		'student_id',
		'program_type',
		'payment_id',
		'no_of_payment',
		'amount',
		'original_amount',
		'date_added',
		'date_updated',
		'sy'
	];
}
