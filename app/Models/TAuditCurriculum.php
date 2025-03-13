<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TAuditCurriculum
 * 
 * @property int $ID
 * @property int|null $CURRICULUM_ID
 * @property int|null $USER_ID
 * @property string|null $USER_ACTION
 * @property Carbon $TIMESTAMP
 * @property string|null $PROGRAM_TYPE
 *
 * @package App\Models
 */
class TAuditCurriculum extends Model
{
	protected $table = 't_audit_curriculum';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CURRICULUM_ID' => 'int',
		'USER_ID' => 'int',
		'TIMESTAMP' => 'datetime'
	];

	protected $fillable = [
		'CURRICULUM_ID',
		'USER_ID',
		'USER_ACTION',
		'TIMESTAMP',
		'PROGRAM_TYPE'
	];
}
