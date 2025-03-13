<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MQuestionList
 * 
 * @property int $id
 * @property int $academic_id
 * @property string $question
 * @property int $order_by
 * @property int $criteria_id
 *
 * @package App\Models
 */
class MQuestionList extends Model
{
	protected $table = 'm_question_list';
	public $timestamps = false;

	protected $casts = [
		'academic_id' => 'int',
		'order_by' => 'int',
		'criteria_id' => 'int'
	];

	protected $fillable = [
		'academic_id',
		'question',
		'order_by',
		'criteria_id'
	];
}
