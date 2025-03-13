<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RSubjectEquivalencyAuto
 * 
 * @property int $ID
 * @property int|null $SUBJECT
 * @property int|null $SUBJECT_EQUIV
 * @property string|null $STATUS
 * @property string|null $EXCEPT_COURSE
 *
 * @package App\Models
 */
class RSubjectEquivalencyAuto extends Model
{
	protected $table = 'r_subject_equivalency_auto';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SUBJECT' => 'int',
		'SUBJECT_EQUIV' => 'int'
	];

	protected $fillable = [
		'SUBJECT',
		'SUBJECT_EQUIV',
		'STATUS',
		'EXCEPT_COURSE'
	];
}
