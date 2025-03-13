<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingElemSubject
 * 
 * @property int $ID
 * @property int|null $SECTION_OFFERING_ID
 * @property int|null $SUBJECT
 * 
 * @property TSectionOfferingElem|null $t_section_offering_elem
 * @property RSubjectBasic|null $r_subject_basic
 * @property Collection|TFacultyLoadElem[] $t_faculty_load_elems
 * @property Collection|TSectionOfferingElemSubjectLine[] $t_section_offering_elem_subject_lines
 *
 * @package App\Models
 */
class TSectionOfferingElemSubject extends Model
{
	protected $table = 't_section_offering_elem_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_ID' => 'int',
		'SUBJECT' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_ID',
		'SUBJECT'
	];

	public function t_section_offering_elem()
	{
		return $this->belongsTo(TSectionOfferingElem::class, 'SECTION_OFFERING_ID');
	}

	public function r_subject_basic()
	{
		return $this->belongsTo(RSubjectBasic::class, 'SUBJECT');
	}

	public function t_faculty_load_elems()
	{
		return $this->hasMany(TFacultyLoadElem::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function t_section_offering_elem_subject_lines()
	{
		return $this->hasMany(TSectionOfferingElemSubjectLine::class, 'SECTION_OFFERING_SUBJECT');
	}
}
