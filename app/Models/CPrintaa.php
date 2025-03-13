<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CPrintaa
 * 
 * @property string $idNo
 * @property string $sysem
 * @property int $gradingPeriod
 * @property bool|null $isAccount
 * @property bool|null $isAdmision
 * @property Carbon|null $PrintAct
 * @property Carbon $PrintAdmsn
 * @property string|null $FinalClearance
 * @property string|null $AdmissionCode
 * @property Carbon|null $DateGenerated
 *
 * @package App\Models
 */
class CPrintaa extends Model
{
	protected $table = 'c_printaa';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gradingPeriod' => 'int',
		'isAccount' => 'bool',
		'isAdmision' => 'bool',
		'PrintAct' => 'datetime',
		'PrintAdmsn' => 'datetime',
		'DateGenerated' => 'datetime'
	];

	protected $fillable = [
		'isAccount',
		'isAdmision',
		'PrintAct',
		'FinalClearance',
		'AdmissionCode',
		'DateGenerated'
	];
}
