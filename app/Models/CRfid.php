<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CRfid
 * 
 * @property string $Student_No
 * @property int|null $Badge_No
 * @property string|null $User
 * @property Carbon|null $DateReg
 *
 * @package App\Models
 */
class CRfid extends Model
{
	protected $table = 'c_rfid';
	protected $primaryKey = 'Student_No';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Badge_No' => 'int',
		'DateReg' => 'datetime'
	];

	protected $fillable = [
		'Badge_No',
		'User',
		'DateReg'
	];
}
