<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCompreLine
 * 
 * @property int $ID
 * @property int $COMPRE
 * @property int $SUBJECT
 * @property float $GRADE
 * @property string $REMARKS
 * @property int $FACULTY
 * 
 * @property TCompre $t_compre
 * @property RUser $r_user
 * @property RSubject $r_subject
 *
 * @package App\Models
 */
class TCompreLine extends Model
{
	protected $table = 't_compre_line';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'COMPRE' => 'int',
		'SUBJECT' => 'int',
		'GRADE' => 'float',
		'FACULTY' => 'int'
	];

	protected $fillable = [
		'COMPRE',
		'SUBJECT',
		'GRADE',
		'REMARKS',
		'FACULTY'
	];

	public function t_compre()
	{
		return $this->belongsTo(TCompre::class, 'COMPRE');
	}

	public function r_user()
	{
		return $this->belongsTo(RUser::class, 'FACULTY');
	}

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'SUBJECT');
	}
}
