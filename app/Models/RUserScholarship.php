<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserScholarship
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $NAME
 * @property string|null $PROGRAM
 * @property string|null $SCHOOL
 * @property string|null $FUNDING_AGENCY
 * @property string|null $DURATION
 *
 * @package App\Models
 */
class RUserScholarship extends Model
{
	protected $table = 'r_user_scholarship';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int'
	];

	protected $fillable = [
		'USER_PROFILE',
		'NAME',
		'PROGRAM',
		'SCHOOL',
		'FUNDING_AGENCY',
		'DURATION'
	];
}
