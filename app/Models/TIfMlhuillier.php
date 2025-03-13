<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TIfMlhuillier
 * 
 * @property int $id
 * @property int|null $imported_by
 * @property string|null $import_status
 * @property Carbon|null $import_date_time
 * @property int|null $student_id
 * @property int|null $sysem
 * @property int|null $sy
 * @property Carbon|null $payment_date
 * @property string|null $control_no
 * @property string|null $reference_no
 * @property string|null $payor
 * @property int|null $account_no
 * @property string|null $account_name
 * @property float|null $amount_paid
 * @property string|null $contact_no
 * @property string|null $ml_outlet
 * @property string|null $operator
 *
 * @package App\Models
 */
class TIfMlhuillier extends Model
{
	protected $table = 't_if_mlhuillier';
	public $timestamps = false;

	protected $casts = [
		'imported_by' => 'int',
		'import_date_time' => 'datetime',
		'student_id' => 'int',
		'sysem' => 'int',
		'sy' => 'int',
		'payment_date' => 'datetime',
		'account_no' => 'int',
		'amount_paid' => 'float'
	];

	protected $fillable = [
		'imported_by',
		'import_status',
		'import_date_time',
		'student_id',
		'sysem',
		'sy',
		'payment_date',
		'control_no',
		'reference_no',
		'payor',
		'account_no',
		'account_name',
		'amount_paid',
		'contact_no',
		'ml_outlet',
		'operator'
	];
}
