<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RDiscipline
 * 
 * @property int $id
 * @property string|null $desc
 *
 * @package App\Models
 */
class RDiscipline extends Model
{
	protected $table = 'r_discipline';
	public $timestamps = false;

	protected $fillable = [
		'desc'
	];
}
