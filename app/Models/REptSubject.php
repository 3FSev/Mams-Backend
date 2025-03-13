<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class REptSubject
 * 
 * @property int $ID
 * @property int|null $EQUIV_SUBJECT
 * @property int|null $REPLACEMENT_FOR
 * 
 * @property RSubject|null $r_subject
 *
 * @package App\Models
 */
class REptSubject extends Model
{
	protected $table = 'r_ept_subject';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'EQUIV_SUBJECT' => 'int',
		'REPLACEMENT_FOR' => 'int'
	];

	protected $fillable = [
		'EQUIV_SUBJECT',
		'REPLACEMENT_FOR'
	];

	public function r_subject()
	{
		return $this->belongsTo(RSubject::class, 'REPLACEMENT_FOR');
	}
}
