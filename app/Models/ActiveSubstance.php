<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class ActiveSubstance extends Model
{
	protected $table = 'active_substances';
	protected $fillable = [
		'name',
	];
}