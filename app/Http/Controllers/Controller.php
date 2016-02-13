<?php 
namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Medicine as Medicine;
use App\Models\ActiveSubstance as ActiveSubstance;


class Controller extends BaseController
{
	public function getMedicine($id)
	{
		return response()->json(Medicine::find($id));
	}

	public function getActiveSubstance($id)
	{
		return response()->json(ActiveSubstance::find($id));
	}
}
