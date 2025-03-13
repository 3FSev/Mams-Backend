<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYlHistory
 * 
 * @property string|null $STUDENT_NO
 * @property string|null $CURRCODE
 * @property int|null $CURRENT_UNITS
 * @property int|null $NEEDED_UNITS
 * @property int|null $ADMISSION_YEAR
 * @property string|null $COURSE
 * @property int|null $OLD_YRLVL
 * @property int|null $NEW_YRLVL
 * @property string|null $OLD_ST_AS
 * @property string|null $NEW_ST_AS
 * @property string|null $OLD_CURRCODE
 * @property string|null $OLD_COURSE
 * @property string|null $SYSEM
 * @property Carbon $DATE_CREATED
 * @property int|null $USER
 *
 * @package App\Models
 */
class TYlHistory extends Model
{
	protected $table = 't_yl_history';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'CURRENT_UNITS' => 'int',
		'NEEDED_UNITS' => 'int',
		'ADMISSION_YEAR' => 'int',
		'OLD_YRLVL' => 'int',
		'NEW_YRLVL' => 'int',
		'DATE_CREATED' => 'datetime',
		'USER' => 'int'
	];

	protected $fillable = [
		'STUDENT_NO',
		'CURRCODE',
		'CURRENT_UNITS',
		'NEEDED_UNITS',
		'ADMISSION_YEAR',
		'COURSE',
		'OLD_YRLVL',
		'NEW_YRLVL',
		'OLD_ST_AS',
		'NEW_ST_AS',
		'OLD_CURRCODE',
		'OLD_COURSE',
		'SYSEM',
		'DATE_CREATED',
		'USER'
	];
}
