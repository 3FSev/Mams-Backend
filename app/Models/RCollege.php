<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RCollege
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $NAME
 * @property int $CAMPUS
 * @property string|null $PROGRAM_TYPE
 * @property int|null $DEAN
 * 
 * @property RUser|null $r_user
 * @property RCampus $r_campus
 * @property Collection|RCourse[] $r_courses
 * @property Collection|RCourse1[] $r_course1s
 * @property Collection|RDepartment[] $r_departments
 * @property Collection|RFacultyCampusAssignment[] $r_faculty_campus_assignments
 * @property Collection|RSystemConfigSchedule[] $r_system_config_schedules
 *
 * @package App\Models
 */
class RCollege extends Model
{
	protected $table = 'r_college';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CAMPUS' => 'int',
		'DEAN' => 'int'
	];

	protected $fillable = [
		'CODE',
		'NAME',
		'CAMPUS',
		'PROGRAM_TYPE',
		'DEAN'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'DEAN');
	}

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}

	public function r_courses()
	{
		return $this->hasMany(RCourse::class, 'COLLEGE');
	}

	public function r_course1s()
	{
		return $this->hasMany(RCourse1::class, 'COLLEGE');
	}

	public function r_departments()
	{
		return $this->hasMany(RDepartment::class, 'COLLEGE');
	}

	public function r_faculty_campus_assignments()
	{
		return $this->hasMany(RFacultyCampusAssignment::class, 'department');
	}

	public function r_system_config_schedules()
	{
		return $this->hasMany(RSystemConfigSchedule::class, 'COLLEGE');
	}
}
