<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RGradingSystemSubj
 * 
 * @property int $ID
 * @property int|null $SUBJECT
 * @property string|null $LABEL
 * @property Carbon $DATE_ADDED
 * @property int|null $PERIOD
 * @property float|null $PERCENT
 * @property string|null $STATUS
 * @property int|null $CURRICULUM
 * 
 * @property RSubject|null $r_subject
 *
 * @package App\Models
 */
class RGradingSystemSubj extends Model
{
	protected $table = 'r_grading_system_subj';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SUBJECT' => 'int',
		'DATE_ADDED' => 'datetime',
		'PERIOD' => 'int',
		'PERCENT' => 'float',
		'CURRICULUM' => 'int'
	];

	protected $fillable = [
		'SUBJECT',
		'LABEL',
		'DATE_ADDED',
		'PERIOD',
		'PERCENT',
		'STATUS',
		'CURRICULUM'
	];

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}
}
