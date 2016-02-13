<?php 
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Medicine as Medicine;


class Controller extends BaseController
{
	public function getMedicine($id)
	{
		$x = Medicine::all();
		return response()->json($x);
	}
}
