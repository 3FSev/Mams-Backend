<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TProcessedDocument
 * 
 * @property int $ID
 * @property int|null $STUDENT
 * @property int|null $DOCUMENT_ID
 * @property Carbon|null $DATE_REQUESTED
 * @property string|null $STATUS
 * @property string|null $PROCESSED_BY
 * @property Carbon|null $DATE_ADDED
 * @property string|null $UPDATED_BY
 * @property Carbon|null $DATE_UPDATED
 * 
 * @property TStudent|null $t_student
 * @property RDocument|null $r_document
 *
 * @package App\Models
 */
class TProcessedDocument extends Model
{
	protected $table = 't_processed_document';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT' => 'int',
		'DOCUMENT_ID' => 'int',
		'DATE_REQUESTED' => 'datetime',
		'DATE_ADDED' => 'datetime',
		'DATE_UPDATED' => 'datetime'
	];

	protected $fillable = [
		'STUDENT',
		'DOCUMENT_ID',
		'DATE_REQUESTED',
		'STATUS',
		'PROCESSED_BY',
		'DATE_ADDED',
		'UPDATED_BY',
		'DATE_UPDATED'
	];

	public function t_student()
	{
		return $this->belongsTo(TStudent::class, 'STUDENT');
	}

	public function r_document()
	{
		return $this->belongsTo(RDocument::class, 'DOCUMENT_ID');
	}
}
