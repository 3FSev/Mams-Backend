<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RClearanceOffice
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $NAME
 * @property int|null $OFFICE_HEAD
 * @property string|null $STATUS
 * 
 * @property RUser|null $r_user
 *
 * @package App\Models
 */
class RClearanceOffice extends Model
{
	protected $table = 'r_clearance_office';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'OFFICE_HEAD' => 'int'
	];

	protected $fillable = [
		'CODE',
		'NAME',
		'OFFICE_HEAD',
		'STATUS'
	];

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'OFFICE_HEAD');
	}
}
