<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RUserExtensionActivity
 * 
 * @property int $ID
 * @property int $USER_PROFILE
 * @property string $TYPE
 * @property string|null $TITLE
 * @property string|null $CLASSIFICATION
 * @property string|null $SUB_CLASS
 * @property string|null $FUNDING_SOURCE
 * @property float|null $FUNDIND_AMOUNT
 * @property Carbon|null $DATE
 * @property string|null $INVOLVEMENT_NATURE
 * @property int|null $NO_TRAINED
 * @property int|null $NO_HOURS
 * @property int|null $TRAINEE_HOURS
 * @property string|null $RECOGNITION_TITLE
 * @property string|null $RECOGNITION_AGENCY
 *
 * @package App\Models
 */
class RUserExtensionActivity extends Model
{
	protected $table = 'r_user_extension_activity';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'USER_PROFILE' => 'int',
		'FUNDIND_AMOUNT' => 'float',
		'DATE' => 'datetime',
		'NO_TRAINED' => 'int',
		'NO_HOURS' => 'int',
		'TRAINEE_HOURS' => 'int'
	];

	protected $fillable = [
		'USER_PROFILE',
		'TYPE',
		'TITLE',
		'CLASSIFICATION',
		'SUB_CLASS',
		'FUNDING_SOURCE',
		'FUNDIND_AMOUNT',
		'DATE',
		'INVOLVEMENT_NATURE',
		'NO_TRAINED',
		'NO_HOURS',
		'TRAINEE_HOURS',
		'RECOGNITION_TITLE',
		'RECOGNITION_AGENCY'
	];
}
