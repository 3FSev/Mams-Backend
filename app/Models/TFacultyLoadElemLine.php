<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TFacultyLoadElemLine
 * 
 * @property int $ID
 * @property int|null $FACULTY_LOAD
 * @property int|null $FACULTY
 * @property string|null $LOAD_TYPE
 * @property Carbon|null $TIME_START
 * @property Carbon|null $TIME_END
 * @property string|null $DAY
 * @property string|null $STATUS
 * @property string $IS_MAIN
 * 
 * @property TFacultyLoadElem|null $t_faculty_load_elem
 *
 * @package App\Models
 */
class TFacultyLoadElemLine extends Model
{
	protected $table = 't_faculty_load_elem_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'FACULTY_LOAD' => 'int',
		'FACULTY' => 'int',
		'TIME_START' => 'datetime',
		'TIME_END' => 'datetime'
	];

	protected $fillable = [
		'FACULTY_LOAD',
		'FACULTY',
		'LOAD_TYPE',
		'TIME_START',
		'TIME_END',
		'DAY',
		'STATUS',
		'IS_MAIN'
	];

	public function t_faculty_load_elem()
	{
		return $this->belongsTo(TFacultyLoadElem::class, 'FACULTY_LOAD');
	}
}
