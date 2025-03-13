<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RSubjectGroup
 * 
 * @property int $ID
 * @property int $GROUP
 * @property int $SUB
 * 
 * @property RSubject $r_subject
 *
 * @package App\Models
 */
class RSubjectGroup extends Model
{
	protected $table = 'r_subject_group';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'GROUP' => 'int',
		'SUB' => 'int'
	];

	protected $fillable = [
		'GROUP',
		'SUB'
	];

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUB');
	}
}
