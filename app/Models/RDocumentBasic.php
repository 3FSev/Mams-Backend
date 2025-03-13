<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RDocumentBasic
 * 
 * @property int $ID
 * @property string|null $DESCRIPTION
 * @property string|null $MANDATORY
 * @property string|null $LEVEL
 * @property string|null $APPLICANT_TYPE
 * @property string|null $PURPOSE
 * @property string|null $STATUS
 * 
 * @property Collection|TDocumentSubmittedBasic[] $t_document_submitted_basics
 *
 * @package App\Models
 */
class RDocumentBasic extends Model
{
	protected $table = 'r_document_basic';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'DESCRIPTION',
		'MANDATORY',
		'LEVEL',
		'APPLICANT_TYPE',
		'PURPOSE',
		'STATUS'
	];

	public function t_document_submitted_basics()
	{
		return $this->hasMany(TDocumentSubmittedBasic::class, 'DOCUMENT_ID');
	}
}
