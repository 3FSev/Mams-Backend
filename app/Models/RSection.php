<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RSection
 * 
 * @property int $ID
 * @property string $CODE
 * @property int $COURSE
 * @property int|null $SLOTS
 * 
 * @property RCourse $r_course
 *
 * @package App\Models
 */
class RSection extends Model
{
	protected $table = 'r_section';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'COURSE' => 'int',
		'SLOTS' => 'int'
	];

	protected $fillable = [
		'CODE',
		'COURSE',
		'SLOTS'
	];

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}
