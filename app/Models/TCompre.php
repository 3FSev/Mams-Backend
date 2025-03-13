<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TCompre
 * 
 * @property int $ID
 * @property int $STUDENT
 * @property string $STATUS
 * @property int $SY_SEM
 * @property Carbon $DATE_REQUEST
 * @property Carbon $DATE_STATUS
 * @property int $APPROVER
 * 
 * @property Collection|TCompreLine[] $t_compre_lines
 *
 * @package App\Models
 */
class TCompre extends Model
{
	protected $table = 't_compre';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'STUDENT' => 'int',
		'SY_SEM' => 'int',
		'DATE_REQUEST' => 'datetime',
		'DATE_STATUS' => 'datetime',
		'APPROVER' => 'int'
	];

	protected $fillable = [
		'STUDENT',
		'STATUS',
		'SY_SEM',
		'DATE_REQUEST',
		'DATE_STATUS',
		'APPROVER'
	];

	public function t_compre_lines()
	{
		return $this->hasMany(TCompreLine::class, 'COMPRE');
	}
}
