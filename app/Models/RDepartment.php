<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RDepartment
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $NAME
 * @property int|null $COLLEGE
 * @property int|null $CHAIRPERSON
 * 
 * @property RCollege|null $r_college
 * @property Collection|RCourse[] $r_courses
 * @property Collection|RCourse1[] $r_course1s
 *
 * @package App\Models
 */
class RDepartment extends Model
{
	protected $table = 'r_department';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'COLLEGE' => 'int',
		'CHAIRPERSON' => 'int'
	];

	protected $fillable = [
		'CODE',
		'NAME',
		'COLLEGE',
		'CHAIRPERSON'
	];

	public function r_college()
	{
		return $this->belongsTo(RCollege::class, 'COLLEGE');
	}

	public function r_courses()
	{
		return $this->hasMany(RCourse::class, 'DEPARTMENT');
	}

	public function r_course1s()
	{
		return $this->hasMany(RCourse1::class, 'DEPARTMENT');
	}
}
