<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPaymentLine
 * 
 * @property int $id
 * @property int|null $payment_id
 * @property int|null $payment_sched_id
 *
 * @package App\Models
 */
class TPaymentLine extends Model
{
	protected $table = 't_payment_line';
	public $timestamps = false;

	protected $casts = [
		'payment_id' => 'int',
		'payment_sched_id' => 'int'
	];

	protected $fillable = [
		'payment_id',
		'payment_sched_id'
	];
}
