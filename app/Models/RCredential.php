<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RCredential
 * 
 * @property int $id
 * @property string|null $ccode
 * @property string|null $cdescription
 * @property string|null $type
 *
 * @package App\Models
 */
class RCredential extends Model
{
	protected $table = 'r_credentials';
	public $timestamps = false;

	protected $fillable = [
		'ccode',
		'cdescription',
		'type'
	];
}
