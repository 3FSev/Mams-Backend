<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TSectionOfferingOpen
 * 
 * @property int $ID
 * @property int $SECTION_OFFERING
 * @property int $COURSE
 * 
 * @property TSectionOffering $t_section_offering
 * @property RCourse $r_course
 *
 * @package App\Models
 */
class TSectionOfferingOpen extends Model
{
	protected $table = 't_section_offering_open';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'SECTION_OFFERING' => 'int',
		'COURSE' => 'int'
	];

	protected $fillable = [
		'SECTION_OFFERING',
		'COURSE'
	];

	public function t_section_offering()
	{
		return $this->belongsTo(TSectionOffering::class, 'SECTION_OFFERING');
	}

	public function r_course()
	{
		return $this->belongsTo(RCourse::class, 'COURSE');
	}
}
