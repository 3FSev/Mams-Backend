<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TFacultyLoadElem
 * 
 * @property int $ID
 * @property int|null $SECTION_OFFERING_SUBJECT
 * 
 * @property TSectionOfferingElemSubject|null $t_section_offering_elem_subject
 * @property Collection|TFacultyLoadElemLine[] $t_faculty_load_elem_lines
 *
 * @package App\Models
 */
class TFacultyLoadElem extends Model
{
	protected $table = 't_faculty_load_elem';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_SUBJECT' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_SUBJECT'
	];

	public function t_section_offering_elem_subject()
	{
		return $this->belongsTo(TSectionOfferingElemSubject::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function t_faculty_load_elem_lines()
	{
		return $this->hasMany(TFacultyLoadElemLine::class, 'FACULTY_LOAD');
	}
}
