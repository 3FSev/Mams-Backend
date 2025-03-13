<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SysDebitCredit
 * 
 * @property int|null $debit
 * @property int|null $credit
 * @property int|null $discount
 *
 * @package App\Models
 */
class SysDebitCredit extends Model
{
	protected $table = 'sys_debit_credit';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'debit' => 'int',
		'credit' => 'int',
		'discount' => 'int'
	];

	protected $fillable = [
		'debit',
		'credit',
		'discount'
	];
}
