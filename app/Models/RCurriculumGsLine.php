<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCurriculumGsLine
 * 
 * @property int $ID
 * @property int|null $CURR_ID
 * @property int|null $SUBJECT
 * @property string|null $CATEGORY
 *
 * @package App\Models
 */
class RCurriculumGsLine extends Model
{
	protected $table = 'r_curriculum_gs_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CURR_ID' => 'int',
		'SUBJECT' => 'int'
	];

	protected $fillable = [
		'CURR_ID',
		'SUBJECT',
		'CATEGORY'
	];
}
