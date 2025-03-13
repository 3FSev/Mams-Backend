<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TClearance
 * 
 * @property int $ID
 * @property int|null $STUDENT_ID
 * @property int|null $OFFICE
 * @property int|null $SCHOOL
 * @property int|null $SY_SEM
 * @property string|null $REMARKS
 * @property string|null $AMOUNT
 * @property string|null $STATUS
 * @property Carbon $DATE_SUBMITTED
 * @property int|null $USERID
 * @property string|null $PROGRAM_TYPE
 * @property int|null $EDITEDBY
 * @property Carbon|null $DATE_EDITED
 *
 * @package App\Models
 */
class TClearance extends Model
{
	protected $table = 't_clearance';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT_ID' => 'int',
		'OFFICE' => 'int',
		'SCHOOL' => 'int',
		'SY_SEM' => 'int',
		'DATE_SUBMITTED' => 'datetime',
		'USERID' => 'int',
		'EDITEDBY' => 'int',
		'DATE_EDITED' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_ID',
		'OFFICE',
		'SCHOOL',
		'SY_SEM',
		'REMARKS',
		'AMOUNT',
		'STATUS',
		'DATE_SUBMITTED',
		'USERID',
		'PROGRAM_TYPE',
		'EDITEDBY',
		'DATE_EDITED'
	];
}
