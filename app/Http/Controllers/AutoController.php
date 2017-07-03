<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AutoController extends Controller
{
    public function index()
    {
    	$autos = DB::select('select * from autos');

    	return view('pages.autos', ['autos' => $autos]);
    }
}
