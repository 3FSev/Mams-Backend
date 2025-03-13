<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RProgramType
 * 
 * @property int $ID
 * @property string $DESCRIPTION
 *
 * @package App\Models
 */
class RProgramType extends Model
{
	protected $table = 'r_program_type';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'DESCRIPTION'
	];
}
