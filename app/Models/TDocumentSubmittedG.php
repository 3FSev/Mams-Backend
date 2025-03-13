<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TDocumentSubmittedG
 * 
 * @property int $ID
 * @property int|null $APPLICANT
 * @property int|null $DOCUMENT_ID
 * @property string|null $PATH
 * @property Carbon|null $DATE_SUBMITTED
 * @property string|null $REMARKS
 * @property string|null $PROCESSED_BY
 * @property string|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 * 
 * @property TApplicant|null $t_applicant
 * @property RDocumentG|null $r_document_g
 *
 * @package App\Models
 */
class TDocumentSubmittedG extends Model
{
	protected $table = 't_document_submitted_gs';
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
		'REMARKS',
		'PROCESSED_BY',
		'UPDATED_BY',
		'DATE_UPDATED'
	];

	public function t_applicant()
	{
		return $this->belongsTo(TApplicant::class, 'APPLICANT');
	}

	public function r_document_g()
	{
		return $this->belongsTo(RDocumentG::class, 'DOCUMENT_ID');
	}
}
