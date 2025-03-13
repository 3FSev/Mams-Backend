<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumGsPre
 * 
 * @property int $ID
 * @property int|null $FROM_CURR_LINE_ID
 * @property int|null $TO_CURR_LINE_ID
 *
 * @package App\Models
 */
class RCurriculumGsPre extends Model
{
	protected $table = 'r_curriculum_gs_pre';
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
}
