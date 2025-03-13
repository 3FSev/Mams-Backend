<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TCredentialappLine
 * 
 * @property int $id
 * @property string|null $REQUESTID
 * @property string|null $REQUEST
 * @property string|null $SEM
 * @property string|null $SY
 * @property string|null $TAG
 * @property string|null $ACCTNGCOMMENT
 * @property float|null $AMOUNT
 * @property string|null $PAIDTAG
 * @property string|null $ORNUMBER
 * @property Carbon|null $DATEPAIDTAG
 * @property string|null $ACCTCLEARANCE
 * @property Carbon|null $CLAIMDATE
 * @property string|null $CLAIMDETAILS
 * @property string|null $CLAIMED
 * @property Carbon|null $RELEASEDATE
 * @property string|null $VOID_BY
 * @property Carbon|null $DOD
 * @property string|null $NOCOPIES
 *
 * @package App\Models
 */
class TCredentialappLine extends Model
{
	protected $table = 't_credentialapp_line';
	public $timestamps = false;

	protected $casts = [
		'AMOUNT' => 'float',
		'DATEPAIDTAG' => 'datetime',
		'CLAIMDATE' => 'datetime',
		'RELEASEDATE' => 'datetime',
		'DOD' => 'datetime'
	];

	protected $fillable = [
		'REQUESTID',
		'REQUEST',
		'SEM',
		'SY',
		'TAG',
		'ACCTNGCOMMENT',
		'AMOUNT',
		'PAIDTAG',
		'ORNUMBER',
		'DATEPAIDTAG',
		'ACCTCLEARANCE',
		'CLAIMDATE',
		'CLAIMDETAILS',
		'CLAIMED',
		'RELEASEDATE',
		'VOID_BY',
		'DOD',
		'NOCOPIES'
	];
}
