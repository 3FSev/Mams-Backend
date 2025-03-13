<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TDocumentSubmitted
 * 
 * @property int $ID
 * @property int|null $APPLICANT
 * @property int|null $DOCUMENT_ID
 * @property string|null $PATH
 * @property Carbon|null $DATE_SUBMITTED
 * @property string|null $PROCESSED_BY
 * @property string|null $REMARKS
 * @property string|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 *
 * @package App\Models
 */
class TDocumentSubmitted extends Model
{
	protected $table = 't_document_submitted';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'APPLICANT' => 'int',
		'DOCUMENT_ID' => 'int',
		'DATE_SUBMITTED' => 'datetime',
		'DATE_UPDATED' => 'datetime'
	];

	protected $fillable = [
		'APPLICANT',
		'DOCUMENT_ID',
		'PATH',
		'DATE_SUBMITTED',
		'PROCESSED_BY',
		'REMARKS',
		'UPDATED_BY',
		'DATE_UPDATED'
	];
}
