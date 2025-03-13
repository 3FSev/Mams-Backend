<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TFacultyLoadSh
 * 
 * @property int $ID
 * @property int|null $SECTION_OFFERING_SUBJECT
 * 
 * @property TSectionOfferingShsSubject|null $t_section_offering_shs_subject
 *
 * @package App\Models
 */
class TFacultyLoadSh extends Model
{
	protected $table = 't_faculty_load_shs';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_SUBJECT' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_SUBJECT'
	];

	public function t_section_offering_shs_subject()
	{
		return $this->belongsTo(TSectionOfferingShsSubject::class, 'SECTION_OFFERING_SUBJECT');
	}
}
