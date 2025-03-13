<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RFacultyType
 * 
 * @property int $ID
 * @property string|null $DESCRIPTION
 * @property int|null $MAXHR_REG_LOAD
 * @property int|null $MAXHR_PART_LOAD
 * @property int|null $MAXHR_TEMP_LOAD
 * @property string|null $STATUS
 * 
 * @property Collection|RFacultyCampusAssignment[] $r_faculty_campus_assignments
 *
 * @package App\Models
 */
class RFacultyType extends Model
{
	protected $table = 'r_faculty_type';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'MAXHR_REG_LOAD' => 'int',
		'MAXHR_PART_LOAD' => 'int',
		'MAXHR_TEMP_LOAD' => 'int'
	];

	protected $fillable = [
		'DESCRIPTION',
		'MAXHR_REG_LOAD',
		'MAXHR_PART_LOAD',
		'MAXHR_TEMP_LOAD',
		'STATUS'
	];

	public function r_faculty_campus_assignments()
	{
		return $this->hasMany(RFacultyCampusAssignment::class, 'faculty_type');
	}
}
