<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CPromi
 * 
 * @property string|null $idNo
 * @property int|null $gradingPeriod
 * @property bool|null $IsPromi
 * @property string|null $userID
 * @property Carbon|null $dateTagged
 * @property string|null $Reason
 * @property string|null $sysem
 *
 * @package App\Models
 */
class CPromi extends Model
{
	protected $table = 'c_promi';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gradingPeriod' => 'int',
		'IsPromi' => 'bool',
		'dateTagged' => 'datetime'
	];

	protected $fillable = [
		'idNo',
		'gradingPeriod',
		'IsPromi',
		'userID',
		'dateTagged',
		'Reason',
		'sysem'
	];
}
