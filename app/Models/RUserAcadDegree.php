<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserAcadDegree
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $DEGREE
 * @property string|null $DISCIPLINE
 * @property string|null $COURSE
 * @property string|null $MAJOR
 * @property string|null $MINOR
 * @property int|null $YEAR_GRADUATED
 * @property string|null $SCHOOL_NAME
 * @property string|null $HONOR_REWARD
 *
 * @package App\Models
 */
class RUserAcadDegree extends Model
{
	protected $table = 'r_user_acad_degree';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'YEAR_GRADUATED' => 'int'
	];

	protected $fillable = [
		'USER_PROFILE',
		'DEGREE',
		'DISCIPLINE',
		'COURSE',
		'MAJOR',
		'MINOR',
		'YEAR_GRADUATED',
		'SCHOOL_NAME',
		'HONOR_REWARD'
	];
}
