<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RPayment
 * 
 * @property int $ID
 * @property string|null $DESCRIPTION
 * @property int|null $NO_OF_PAYMENT
 *
 * @package App\Models
 */
class RPayment extends Model
{
	protected $table = 'r_payment';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'NO_OF_PAYMENT' => 'int'
	];

	protected $fillable = [
		'DESCRIPTION',
		'NO_OF_PAYMENT'
	];
}
