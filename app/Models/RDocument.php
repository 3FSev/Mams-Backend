<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RDocument
 * 
 * @property int $ID
 * @property string|null $DESCRIPTION
 * @property string|null $MANDATORY
 * @property string|null $APPLICANT_TYPE
 * @property string|null $PURPOSE
 * @property string|null $STATUS
 * 
 * @property Collection|TProcessedDocument[] $t_processed_documents
 *
 * @package App\Models
 */
class RDocument extends Model
{
	protected $table = 'r_document';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'DESCRIPTION',
		'MANDATORY',
		'APPLICANT_TYPE',
		'PURPOSE',
		'STATUS'
	];

	public function t_processed_documents()
	{
		return $this->hasMany(TProcessedDocument::class, 'DOCUMENT_ID');
	}
}
