<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumLineCoreq
 * 
 * @property int $ID
 * @property int|null $CURR_LINE_ID
 * @property int|null $SUBJECT_CURR_ID
 * 
 * @property RCurriculumLine|null $r_curriculum_line
 *
 * @package App\Models
 */
class RCurriculumLineCoreq extends Model
{
	protected $table = 'r_curriculum_line_coreq';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CURR_LINE_ID' => 'int',
		'SUBJECT_CURR_ID' => 'int'
	];

	protected $fillable = [
		'CURR_LINE_ID',
		'SUBJECT_CURR_ID'
	];

	public function r_curriculum_line()
	{
		return $this->belongsTo(RCurriculumLine::class, 'CURR_LINE_ID');
	}
}
