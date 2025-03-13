<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TGraduationDetail
 * 
 * @property int $id
 * @property int|null $campus
 * @property int|null $college
 * @property Carbon|null $grad_date
 * @property string|null $grad_venue
 * @property string|null $note
 * @property string|null $sy_sem
 * @property int|null $added_by
 * @property Carbon $date_added
 * @property int|null $updated_by
 * @property Carbon|null $date_updated
 * @property int|null $STATUS
 *
 * @package App\Models
 */
class TGraduationDetail extends Model
{
	protected $table = 't_graduation_details';
	public $timestamps = false;

	protected $casts = [
		'campus' => 'int',
		'college' => 'int',
		'grad_date' => 'datetime',
		'added_by' => 'int',
		'date_added' => 'datetime',
		'updated_by' => 'int',
		'date_updated' => 'datetime',
		'STATUS' => 'int'
	];

	protected $fillable = [
		'campus',
		'college',
		'grad_date',
		'grad_venue',
		'note',
		'sy_sem',
		'added_by',
		'date_added',
		'updated_by',
		'date_updated',
		'STATUS'
	];
}
