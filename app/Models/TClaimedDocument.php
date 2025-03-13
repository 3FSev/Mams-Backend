<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TClaimedDocument
 * 
 * @property int $ID
 * @property int|null $STUDENT_APPLICANT
 * @property int|null $DOCUMENT_ID
 * @property string|null $COUNT
 * @property Carbon|null $DATE_PROCESSED
 * @property string|null $UPDATED_BY
 * @property string|null $PURPOSE
 *
 * @package App\Models
 */
class TClaimedDocument extends Model
{
	protected $table = 't_claimed_document';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'STUDENT_APPLICANT' => 'int',
		'DOCUMENT_ID' => 'int',
		'DATE_PROCESSED' => 'datetime'
	];

	protected $fillable = [
		'ID',
		'STUDENT_APPLICANT',
		'DOCUMENT_ID',
		'COUNT',
		'DATE_PROCESSED',
		'UPDATED_BY',
		'PURPOSE'
	];
}
