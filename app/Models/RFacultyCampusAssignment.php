<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RFacultyCampusAssignment
 * 
 * @property int $ID
 * @property int $faculty
 * @property int $campus
 * @property int $emp_status
 * @property int $faculty_type
 * @property Carbon $date_assigned
 * @property string|null $conflict_override
 * @property int|null $department
 * @property string $program_type
 * 
 * @property RCampus $r_campus
 * @property RCollege|null $r_college
 * @property RUser $r_user
 * @property RFacultyType $r_faculty_type
 *
 * @package App\Models
 */
class RFacultyCampusAssignment extends Model
{
	protected $table = 'r_faculty_campus_assignment';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'faculty' => 'int',
		'campus' => 'int',
		'emp_status' => 'int',
		'faculty_type' => 'int',
		'date_assigned' => 'datetime',
		'department' => 'int'
	];

	protected $fillable = [
		'faculty',
		'campus',
		'emp_status',
		'faculty_type',
		'date_assigned',
		'conflict_override',
		'department',
		'program_type'
	];

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'campus');
	}

	public function r_college()
	{
		return $this->belongsTo(RCollege::class, 'department');
	}

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'faculty');
	}

	public function r_faculty_type()
	{
		return $this->belongsTo(RFacultyType::class, 'faculty_type');
	}
}
