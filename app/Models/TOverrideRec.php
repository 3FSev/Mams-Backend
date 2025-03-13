<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TOverrideRec
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property Carbon $DATE_ADDED
 * @property int|null $USER
 * 
 * @property RUser|null $r_user
 *
 * @package App\Models
 */
class TOverrideRec extends Model
{
	protected $table = 't_override_rec';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DATE_ADDED' => 'datetime',
		'USER' => 'int'
	];

	protected $fillable = [
		'CODE',
		'DATE_ADDED',
		'USER'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'USER');
	}
}
