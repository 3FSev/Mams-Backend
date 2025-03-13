<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserFacultyResearch
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string|null $TITLE
 * @property string|null $FUNDING_AGENCY
 * @property int|null $PERCENT_COMPLETION
 * @property string|null $AWARDS
 * @property string|null $PUBLISHED_IN
 * @property string|null $PUBLISHED_IN_REFEREED
 * @property string|null $PRESENTED_IN
 *
 * @package App\Models
 */
class RUserFacultyResearch extends Model
{
	protected $table = 'r_user_faculty_research';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'PERCENT_COMPLETION' => 'int'
	];

	protected $fillable = [
		'USER_PROFILE',
		'TITLE',
		'FUNDING_AGENCY',
		'PERCENT_COMPLETION',
		'AWARDS',
		'PUBLISHED_IN',
		'PUBLISHED_IN_REFEREED',
		'PRESENTED_IN'
	];
}
