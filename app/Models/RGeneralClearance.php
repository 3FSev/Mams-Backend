<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RGeneralClearance
 * 
 * @property int $ID
 * @property string|null $OFFICE
 * @property int|null $SIGNATORY
 * @property int|null $CAMPUS
 * @property int|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $ADDED_BY
 * @property Carbon|null $DATE_UPDATED
 * @property int|null $UPDATED_BY
 *
 * @package App\Models
 */
class RGeneralClearance extends Model
{
	protected $table = 'r_general_clearance';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SIGNATORY' => 'int',
		'CAMPUS' => 'int',
		'STATUS' => 'int',
		'DATE_ADDED' => 'datetime',
		'ADDED_BY' => 'int',
		'DATE_UPDATED' => 'datetime',
		'UPDATED_BY' => 'int'
	];

	protected $fillable = [
		'OFFICE',
		'SIGNATORY',
		'CAMPUS',
		'STATUS',
		'DATE_ADDED',
		'ADDED_BY',
		'DATE_UPDATED',
		'UPDATED_BY'
	];
}
