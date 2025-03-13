<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RReport
 * 
 * @property int $ID
 * @property string|null $CODE
 * @property string|null $DESCRIPTION
 * @property string|null $STATUS
 * 
 * @property Collection|RSignatory[] $r_signatories
 *
 * @package App\Models
 */
class RReport extends Model
{
	protected $table = 'r_report';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'CODE',
		'DESCRIPTION',
		'STATUS'
	];

	public function r_signatories()
	{
		return $this->hasMany(RSignatory::class, 'REPORT');
	}
}
