<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TApplicantEducAttainment
 * 
 * @property int $id
 * @property int|null $app_id
 * @property string|null $name_of_school
 * @property string|null $course
 * @property string|null $school_level
 * @property string|null $address
 * @property int|null $inclusive_yr_from
 * @property int|null $inclusive_yr_to
 * @property string|null $honors_award
 *
 * @package App\Models
 */
class TApplicantEducAttainment extends Model
{
	protected $table = 't_applicant_educ_attainment';
	public $timestamps = false;

	protected $casts = [
		'app_id' => 'int',
		'inclusive_yr_from' => 'int',
		'inclusive_yr_to' => 'int'
	];

	protected $fillable = [
		'app_id',
		'name_of_school',
		'course',
		'school_level',
		'address',
		'inclusive_yr_from',
		'inclusive_yr_to',
		'honors_award'
	];
}
