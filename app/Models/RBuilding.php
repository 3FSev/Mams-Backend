<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RBuilding
 * 
 * @property int $ID
 * @property string $CODE
 * @property string $NAME
 * @property int $CAMPUS
 * 
 * @property RCampus $r_campus
 * @property Collection|RRoom[] $r_rooms
 *
 * @package App\Models
 */
class RBuilding extends Model
{
	protected $table = 'r_building';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'CAMPUS' => 'int'
	];

	protected $fillable = [
		'CODE',
		'NAME',
		'CAMPUS'
	];

	public function r_campus()
	{
		return $this->belongsTo(RCampus::class, 'CAMPUS');
	}

	public function r_rooms()
	{
		return $this->hasMany(RRoom::class, 'BUILDING');
	}
}
