<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MEvaluation
 * 
 * @property int $id
 * @property int $sosid
 * @property int $fid
 * @property int $student
 * @property int|null $sysem
 * @property Carbon $date_taken
 * @property string|null $comment
 * 
 * @property MEvaluationLine $m_evaluation_line
 *
 * @package App\Models
 */
class MEvaluation extends Model
{
	protected $table = 'm_evaluation';
	public $timestamps = false;

	protected $casts = [
		'sosid' => 'int',
		'fid' => 'int',
		'student' => 'int',
		'sysem' => 'int',
		'date_taken' => 'datetime'
	];

	protected $fillable = [
		'sosid',
		'fid',
		'student',
		'sysem',
		'date_taken',
		'comment'
	];

	public function m_evaluation_line()
	{
		return $this->hasOne(MEvaluationLine::class, 'evaluationid');
	}
}
