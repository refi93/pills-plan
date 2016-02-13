<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
	protected $table = 'medicines';
	protected $fillable = [
		'name',
		'pills_count',
	];

	public function activeSubstances()
	{
		return $this->belongsToMany('ActiveSubstance');
	}
}