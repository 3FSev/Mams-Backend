<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionAssignment
 * 
 * @property int $ID
 * @property int|null $SY
 * @property int|null $SYSEM
 * @property int|null $STUDENT
 * @property int|null $GRADE_LVL
 * @property Carbon|null $DATE_ASSIGNED
 * @property int|null $ASSIGNED_BY
 * @property string|null $PROGRAM_TYPE
 * @property int|null $SECTION
 * 
 * @property RSy|null $r_sy
 * @property TSySem|null $t_sy_sem
 * @property TStudent|null $t_student
 * @property RSectionBasic|null $r_section_basic
 *
 * @package App\Models
 */
class TSectionAssignment extends Model
{
	protected $table = 't_section_assignment';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY' => 'int',
		'SYSEM' => 'int',
		'STUDENT' => 'int',
		'GRADE_LVL' => 'int',
		'DATE_ASSIGNED' => 'datetime',
		'ASSIGNED_BY' => 'int',
		'SECTION' => 'int'
	];

	protected $fillable = [
		'SY',
		'SYSEM',
		'STUDENT',
		'GRADE_LVL',
		'DATE_ASSIGNED',
		'ASSIGNED_BY',
		'PROGRAM_TYPE',
		'SECTION'
	];

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}

	public function t_sy_sem()
	{
		return $this->belongsTo(TSySem::class, 'SYSEM');
	}

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function r_section_basic()
	{
		return $this->belongsTo(RSectionBasic::class, 'SECTION');
	}
}
