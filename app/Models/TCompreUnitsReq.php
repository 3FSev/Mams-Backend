<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCompreUnitsReq
 * 
 * @property int $id
 * @property int|null $curriculum_gs
 * @property int|null $no_of_units
 * @property string|null $type
 *
 * @package App\Models
 */
class TCompreUnitsReq extends Model
{
	protected $table = 't_compre_units_req';
	public $timestamps = false;

	protected $casts = [
		'curriculum_gs' => 'int',
		'no_of_units' => 'int'
	];

	protected $fillable = [
		'curriculum_gs',
		'no_of_units',
		'type'
	];
}
