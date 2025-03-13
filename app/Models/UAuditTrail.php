<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UAuditTrail
 * 
 * @property int $ID
 * @property string $DESCRIPTION
 * @property int $USER_ID
 * @property string $USER_TYPE
 * @property Carbon $DATETIME_LOG
 * @property string $IP_ADDRESS
 * @property string|null $EXECUTION_TIME
 *
 * @package App\Models
 */
class UAuditTrail extends Model
{
	protected $table = 'u_audit_trail';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_ID' => 'int',
		'DATETIME_LOG' => 'datetime'
	];

	protected $fillable = [
		'DESCRIPTION',
		'USER_ID',
		'USER_TYPE',
		'DATETIME_LOG',
		'IP_ADDRESS',
		'EXECUTION_TIME'
	];
}
