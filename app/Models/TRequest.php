<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TRequest
 * 
 * @property int $ID
 * @property string|null $STUDENT_NO
 * @property string|null $NAME
 * @property string|null $SENDTO
 * @property string|null $SCHOOL
 * @property string|null $SCHOOL_ADD
 * @property Carbon|null $SUBMITTED
 * @property Carbon|null $FIRSTREQ
 * @property Carbon|null $SECONDREQ
 * @property Carbon|null $THIRDREQ
 * @property Carbon|null $DATEREQ
 * @property string|null $ADDED_BY
 *
 * @package App\Models
 */
class TRequest extends Model
{
	protected $table = 't_request';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SUBMITTED' => 'datetime',
		'FIRSTREQ' => 'datetime',
		'SECONDREQ' => 'datetime',
		'THIRDREQ' => 'datetime',
		'DATEREQ' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_NO',
		'NAME',
		'SENDTO',
		'SCHOOL',
		'SCHOOL_ADD',
		'SUBMITTED',
		'FIRSTREQ',
		'SECONDREQ',
		'THIRDREQ',
		'DATEREQ',
		'ADDED_BY'
	];
}
