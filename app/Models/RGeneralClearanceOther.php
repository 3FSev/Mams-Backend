<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RGeneralClearanceOther
 * 
 * @property int $ID
 * @property string|null $REQUIREMENTS
 * @property string|null $REMINDER
 * @property string|null $CLAIM_STUB_NOTES
 * @property int|null $STATUS
 * @property Carbon $DATE_ADDED
 * @property int|null $ADDED_BY
 * @property Carbon|null $DATE_UPDATED
 * @property int|null $UPDATED_BY
 *
 * @package App\Models
 */
class RGeneralClearanceOther extends Model
{
	protected $table = 'r_general_clearance_other';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STATUS' => 'int',
		'DATE_ADDED' => 'datetime',
		'ADDED_BY' => 'int',
		'DATE_UPDATED' => 'datetime',
		'UPDATED_BY' => 'int'
	];

	protected $fillable = [
		'REQUIREMENTS',
		'REMINDER',
		'CLAIM_STUB_NOTES',
		'STATUS',
		'DATE_ADDED',
		'ADDED_BY',
		'DATE_UPDATED',
		'UPDATED_BY'
	];
}
