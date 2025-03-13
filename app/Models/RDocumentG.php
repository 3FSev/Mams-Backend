<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RDocumentG
 * 
 * @property int $ID
 * @property string|null $DESCRIPTION
 * @property string|null $MANDATORY
 * @property string|null $APPLICANT_TYPE
 * @property string|null $PURPOSE
 * @property string|null $STATUS
 * 
 * @property Collection|TDocumentSubmittedG[] $t_document_submitted_gs
 *
 * @package App\Models
 */
class RDocumentG extends Model
{
	protected $table = 'r_document_gs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'DESCRIPTION',
		'MANDATORY',
		'APPLICANT_TYPE',
		'PURPOSE',
		'STATUS'
	];

	public function t_document_submitted_gs()
	{
		return $this->hasMany(TDocumentSubmittedG::class, 'DOCUMENT_ID');
	}
}
