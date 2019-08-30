<?php


namespace App\Http\Controllers;

use Algorithms;
use Illuminate\Http\Request;

class AlgorithmsController extends Controller
{

    public function index(Request $request, $driver)
    {
        $result = Algorithms::driver($driver)->setRequest($request)->run();
        return response()->json($result);
    }
}