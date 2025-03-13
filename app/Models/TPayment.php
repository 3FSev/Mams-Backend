<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TPayment
 * 
 * @property int $id
 * @property int|null $sy
 * @property int|null $sysem
 * @property int|null $cashier_id
 * @property int|null $counter_id
 * @property string|null $program_type
 * @property int|null $assessment_id
 * @property int|null $student_id
 * @property string|null $transaction_type
 * @property string|null $or_no
 * @property string|null $description
 * @property int|null $coa_id
 * @property int|null $discount_id
 * @property float|null $debit
 * @property float|null $credit
 * @property float|null $balance
 * @property string|null $payment_mode
 * @property Carbon|null $payment_date
 * @property string|null $check_no
 * @property Carbon|null $check_date
 * @property string|null $bank_name
 * @property string|null $bank_branch
 * @property int|null $is_void
 * @property int|null $void_by
 * @property Carbon|null $date_void
 * @property string|null $reason_for_void
 * @property float|null $cash_rendered
 * @property int|null $is_forwarded
 * @property int|null $sy_edited_by
 * @property Carbon|null $sy_date_updated
 * @property string|null $sy_reason
 * @property int|null $from_sy
 *
 * @package App\Models
 */
class TPayment extends Model
{
	protected $table = 't_payment';
	public $timestamps = false;

	protected $casts = [
		'sy' => 'int',
		'sysem' => 'int',
		'cashier_id' => 'int',
		'counter_id' => 'int',
		'assessment_id' => 'int',
		'student_id' => 'int',
		'coa_id' => 'int',
		'discount_id' => 'int',
		'debit' => 'float',
		'credit' => 'float',
		'balance' => 'float',
		'payment_date' => 'datetime',
		'check_date' => 'datetime',
		'is_void' => 'int',
		'void_by' => 'int',
		'date_void' => 'datetime',
		'cash_rendered' => 'float',
		'is_forwarded' => 'int',
		'sy_edited_by' => 'int',
		'sy_date_updated' => 'datetime',
		'from_sy' => 'int'
	];

	protected $fillable = [
		'sy',
		'sysem',
		'cashier_id',
		'counter_id',
		'program_type',
		'assessment_id',
		'student_id',
		'transaction_type',
		'or_no',
		'description',
		'coa_id',
		'discount_id',
		'debit',
		'credit',
		'balance',
		'payment_mode',
		'payment_date',
		'check_no',
		'check_date',
		'bank_name',
		'bank_branch',
		'is_void',
		'void_by',
		'date_void',
		'reason_for_void',
		'cash_rendered',
		'is_forwarded',
		'sy_edited_by',
		'sy_date_updated',
		'sy_reason',
		'from_sy'
	];
}
