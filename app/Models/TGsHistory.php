<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TGsHistory
 * 
 * @property int $ID
 * @property int|null $SOSID
 * @property int|null $SUBJECT
 * @property string|null $ACTION
 * @property string|null $PROGRAM_TYPE
 * @property Carbon|null $DATE_GENERATED
 * @property int|null $GENERATED_BY
 *
 * @package App\Models
 */
class TGsHistory extends Model
{
	protected $table = 't_gs_history';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SOSID' => 'int',
		'SUBJECT' => 'int',
		'DATE_GENERATED' => 'datetime',
		'GENERATED_BY' => 'int'
	];

	protected $fillable = [
		'SOSID',
		'SUBJECT',
		'ACTION',
		'PROGRAM_TYPE',
		'DATE_GENERATED',
		'GENERATED_BY'
	];
}
