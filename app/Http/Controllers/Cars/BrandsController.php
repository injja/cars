<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    public function list()
    {
        $brands = DB::table('brands')->get();
        return view('cars.brands', ['brands' => $brands]);
    }
}
