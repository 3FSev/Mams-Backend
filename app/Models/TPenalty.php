<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPenalty
 * 
 * @property int $ID
 * @property int $SUBJECT
 * @property int $STUDENT
 * @property string $STATUS
 * 
 * @property TStudent $t_student
 * @property RSubject $r_subject
 *
 * @package App\Models
 */
class TPenalty extends Model
{
	protected $table = 't_penalty';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SUBJECT' => 'int',
		'STUDENT' => 'int'
	];

	protected $fillable = [
		'SUBJECT',
		'STUDENT',
		'STATUS'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}
}
