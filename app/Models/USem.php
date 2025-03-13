<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class USem
 * 
 * @property string|null $sem
 *
 * @package App\Models
 */
class USem extends Model
{
	protected $table = 'u_sem';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'sem'
	];
}
