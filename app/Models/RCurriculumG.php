<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumG
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property int|null $PROGRAM
 * @property string|null $STATUS
 * @property int|null $SY
 * 
 * @property RCourse|null $r_course
 * @property RSy|null $r_sy
 *
 * @package App\Models
 */
class RCurriculumG extends Model
{
	protected $table = 'r_curriculum_gs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'PROGRAM' => 'int',
		'SY' => 'int'
	];

	protected $fillable = [
		'CODE',
		'PROGRAM',
		'STATUS',
		'SY'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'PROGRAM');
	}

	public function r_sy()
	{
		return $this->belongsTo(RSy::class, 'SY');
	}
}
