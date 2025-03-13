<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumShsPre
 * 
 * @property int $ID
 * @property int|null $FROM_CURR_LINE_ID
 * @property int|null $TO_CURR_LINE_ID
 * 
 * @property RCurriculumShsLine|null $r_curriculum_shs_line
 *
 * @package App\Models
 */
class RCurriculumShsPre extends Model
{
	protected $table = 'r_curriculum_shs_pre';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'FROM_CURR_LINE_ID' => 'int',
		'TO_CURR_LINE_ID' => 'int'
	];

	protected $fillable = [
		'FROM_CURR_LINE_ID',
		'TO_CURR_LINE_ID'
	];

	public function r_curriculum_shs_line()
	{
		return $this->belongsTo(RCurriculumShsLine::class, 'TO_CURR_LINE_ID');
	}
}
