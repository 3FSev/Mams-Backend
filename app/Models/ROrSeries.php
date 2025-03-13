<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ROrSeries
 * 
 * @property int $ID
 * @property int|null $CREDIT_START
 * @property int|null $CREDIT_END
 * @property int|null $CREDIT_IN_USE
 * @property int|null $USER
 * @property string|null $DESCRIPTION
 * @property string|null $STATUS
 * @property int|null $COUNTER
 *
 * @package App\Models
 */
class ROrSeries extends Model
{
	protected $table = 'r_or_series';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CREDIT_START' => 'int',
		'CREDIT_END' => 'int',
		'CREDIT_IN_USE' => 'int',
		'USER' => 'int',
		'COUNTER' => 'int'
	];

	protected $fillable = [
		'CREDIT_START',
		'CREDIT_END',
		'CREDIT_IN_USE',
		'USER',
		'DESCRIPTION',
		'STATUS',
		'COUNTER'
	];
}
