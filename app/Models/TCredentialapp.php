<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TCredentialapp
 * 
 * @property int $ID
 * @property string $STUDENT_ID
 * @property string|null $MOTHERSMAIDEN
 * @property string $ADDRESS
 * @property string $CONTACT
 * @property string|null $PROGRAM_TYPE
 * @property string $DEGREE
 * @property string|null $YEARGRAD
 * @property string $PURPOSES
 * @property Carbon|null $DATEAPPLIED
 * @property float|null $TOTALFEE
 * @property string|null $PAYMENTTAG
 * @property string|null $LEDGERREF
 * @property Carbon|null $DATERECEIVEDREG
 * @property Carbon|null $DATECASHIERTAG
 * @property string|null $REGVERIFYUSER
 * @property string|null $REGVERIFYTAG
 * @property string|null $REGCOMMENT
 * @property string|null $REGDEF
 * @property Carbon|null $REFVERIFYDATE
 * @property string|null $CLAIMDETAILS
 * @property string|null $CLAIMED
 * @property string|null $CATEGORYREQUEST
 *
 * @package App\Models
 */
class TCredentialapp extends Model
{
	protected $table = 't_credentialapp';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'DATEAPPLIED' => 'datetime',
		'TOTALFEE' => 'float',
		'DATERECEIVEDREG' => 'datetime',
		'DATECASHIERTAG' => 'datetime',
		'REFVERIFYDATE' => 'datetime'
	];

	protected $fillable = [
		'STUDENT_ID',
		'MOTHERSMAIDEN',
		'ADDRESS',
		'CONTACT',
		'PROGRAM_TYPE',
		'DEGREE',
		'YEARGRAD',
		'PURPOSES',
		'DATEAPPLIED',
		'TOTALFEE',
		'PAYMENTTAG',
		'LEDGERREF',
		'DATERECEIVEDREG',
		'DATECASHIERTAG',
		'REGVERIFYUSER',
		'REGVERIFYTAG',
		'REGCOMMENT',
		'REGDEF',
		'REFVERIFYDATE',
		'CLAIMDETAILS',
		'CLAIMED',
		'CATEGORYREQUEST'
	];
}
