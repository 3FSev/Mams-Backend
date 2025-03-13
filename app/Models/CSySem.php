<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CSySem
 * 
 * @property int $ID
 * @property string $CODE
 * @property int $SY
 * @property string $TERM
 * @property string $STATUS
 *
 * @package App\Models
 */
class CSySem extends Model
{
	protected $table = 'c_sy_sem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SY' => 'int'
	];

	protected $fillable = [
		'CODE',
		'SY',
		'TERM',
		'STATUS'
	];
}
