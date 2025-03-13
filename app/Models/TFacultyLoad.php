<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TFacultyLoad
 * 
 * @property int $ID
 * @property int $SECTION_OFFERING_SUBJECT
 * 
 * @property TSectionOfferingSubject $t_section_offering_subject
 * @property Collection|TFacultyLoadLine[] $t_faculty_load_lines
 *
 * @package App\Models
 */
class TFacultyLoad extends Model
{
	protected $table = 't_faculty_load';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING_SUBJECT' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING_SUBJECT'
	];

	public function t_section_offering_subject()
	{
		return $this->belongsTo(TSectionOfferingSubject::class, 'SECTION_OFFERING_SUBJECT');
	}

	public function t_faculty_load_lines()
	{
		return $this->hasMany(TFacultyLoadLine::class, 'FACULTY_LOAD');
	}
}
