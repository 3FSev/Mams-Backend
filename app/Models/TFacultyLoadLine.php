<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TFacultyLoadLine
 * 
 * @property int $ID
 * @property int $FACULTY_LOAD
 * @property string $IS_MAIN
 * @property int $FACULTY
 * @property string $LOAD_TYPE
 * @property Carbon|null $TIME_START
 * @property Carbon|null $TIME_END
 * @property Carbon|null $DATE_START
 * @property Carbon|null $DATE_END
 * @property string $STATUS
 * @property string $DAY
 * @property Carbon $DATE_STATUS
 * @property float|null $NO_UNITS
 * 
 * @property TFacultyLoad $t_faculty_load
 *
 * @package App\Models
 */
class TFacultyLoadLine extends Model
{
	protected $table = 't_faculty_load_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'FACULTY_LOAD' => 'int',
		'FACULTY' => 'int',
		'TIME_START' => 'datetime',
		'TIME_END' => 'datetime',
		'DATE_START' => 'datetime',
		'DATE_END' => 'datetime',
		'DATE_STATUS' => 'datetime',
		'NO_UNITS' => 'float'
	];

	protected $fillable = [
		'FACULTY_LOAD',
		'IS_MAIN',
		'FACULTY',
		'LOAD_TYPE',
		'TIME_START',
		'TIME_END',
		'DATE_START',
		'DATE_END',
		'STATUS',
		'DAY',
		'DATE_STATUS',
		'NO_UNITS'
	];

	public function t_faculty_load()
	{
		return $this->belongsTo(TFacultyLoad::class, 'FACULTY_LOAD');
	}
}
