<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TTorRc
 * 
 * @property int $ID
 * @property string|null $STUDENT_NO
 * @property string|null $NAME
 * @property string|null $COURSE
 * @property string|null $DEGREE_OBTAINED
 * @property string|null $ADMISSION_DATE
 * @property string|null $SYSEM
 * @property string|null $REMARKS
 * @property string|null $PREPARED_BY
 * @property string|null $CHECKED_BY
 * @property string|null $REGISTRAR
 * @property Carbon $DATE_ADDED
 * @property int|null $ADDED_BY
 * @property string|null $PREV_SCHOOL
 *
 * @package App\Models
 */
class TTorRc extends Model
{
	protected $table = 't_tor_rc';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DATE_ADDED' => 'datetime',
		'ADDED_BY' => 'int'
	];

	protected $fillable = [
		'STUDENT_NO',
		'NAME',
		'COURSE',
		'DEGREE_OBTAINED',
		'ADMISSION_DATE',
		'SYSEM',
		'REMARKS',
		'PREPARED_BY',
		'CHECKED_BY',
		'REGISTRAR',
		'DATE_ADDED',
		'ADDED_BY',
		'PREV_SCHOOL'
	];
}
