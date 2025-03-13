<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RSubjectBasicGroup
 * 
 * @property int $ID
 * @property int $GROUP
 * @property int $SUB
 * 
 * @property RSubjectBasic $r_subject_basic
 *
 * @package App\Models
 */
class RSubjectBasicGroup extends Model
{
	protected $table = 'r_subject_basic_group';
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

	public function r_subject_basic()
	{
		return $this->belongsTo(RSubjectBasic::class, 'SUB');
	}
}
