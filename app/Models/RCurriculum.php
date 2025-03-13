<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculum
 * 
 * @property int $ID
 * @property string $CURRICULUM_YR
 * @property int $COURSE
 * @property string|null $STATUS
 * @property int|null $REPLICATE
 * @property string|null $PROGRAM_TYPE
 * 
 * @property Collection|RCurriculumLine[] $r_curriculum_lines
 * @property Collection|TStudent[] $t_students
 *
 * @package App\Models
 */
class RCurriculum extends Model
{
	protected $table = 'r_curriculum';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'COURSE' => 'int',
		'REPLICATE' => 'int'
	];

	protected $fillable = [
		'CURRICULUM_YR',
		'COURSE',
		'STATUS',
		'REPLICATE',
		'PROGRAM_TYPE'
	];

	public function r_curriculum_lines()
	{
		return $this->hasMany(RCurriculumLine::class, 'CURRICULUM_ID');
	}

	public function t_students()
	{
		return $this->hasMany(TStudent::class, 'REMEDIAL_CURRICULUM');
	}
}
