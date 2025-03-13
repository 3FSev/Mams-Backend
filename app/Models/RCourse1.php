<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCourse1
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $DESCRIPTION
 * @property int $NO_OF_YEARS
 * @property int $COLLEGE
 * @property int|null $DEPARTMENT
 * @property int $COURSE_CATEGORY
 * @property float $HSGWA
 * @property int $NO_OF_ENROLLEES
 * @property string|null $MAJOR
 * @property string|null $PROGRAM_TYPE
 * @property string|null $STATUS
 * 
 * @property RCollege $r_college
 * @property RDepartment|null $r_department
 *
 * @package App\Models
 */
class RCourse1 extends Model
{
	protected $table = 'r_course1';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'NO_OF_YEARS' => 'int',
		'COLLEGE' => 'int',
		'DEPARTMENT' => 'int',
		'COURSE_CATEGORY' => 'int',
		'HSGWA' => 'float',
		'NO_OF_ENROLLEES' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'NO_OF_YEARS',
		'COLLEGE',
		'DEPARTMENT',
		'COURSE_CATEGORY',
		'HSGWA',
		'NO_OF_ENROLLEES',
		'MAJOR',
		'PROGRAM_TYPE',
		'STATUS'
	];

	public function r_college()
	{
		return $this->belongsTo(RCollege::class, 'COLLEGE');
	}

	public function r_department()
	{
		return $this->belongsTo(RDepartment::class, 'DEPARTMENT');
	}
}
