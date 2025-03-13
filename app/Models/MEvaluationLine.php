<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MEvaluationLine
 * 
 * @property int $evaluationid
 * @property int $questionid
 * @property int $rate
 * 
 * @property MEvaluation $m_evaluation
 *
 * @package App\Models
 */
class MEvaluationLine extends Model
{
	protected $table = 'm_evaluation_line';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'evaluationid' => 'int',
		'questionid' => 'int',
		'rate' => 'int'
	];

	protected $fillable = [
		'evaluationid',
		'questionid',
		'rate'
	];

	public function m_evaluation()
	{
		return $this->belongsTo(MEvaluation::class, 'evaluationid');
	}
}
