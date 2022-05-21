<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Services\Cars\CarsService;
use App\Services\Cars\CarsServices;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CarsController extends Controller
{
    public CarsService $carsService;

    public function __construct(CarsService $carsService)
    {
        $this->carsService = $carsService;
    }


    public function list(Request $request)
    {
        // dd($request->vin);
        // dd($request->all());
        $color = $request->get("color");
        $vin = $request->get('vin');
        $minPrice = $request->get("minPrice") ? $request->get("minPrice") : 0;
        $description = $request->get("description");
        //$cars = DB::table('cars')->where('vin', 'like', '%' . $vin . '%')->where('color','like','%'.$color.'%')->where('price','>',$minPrice)->get();
        $cars = $this->carsService->list($vin, $color, $minPrice, $description);
        return view('cars.list', ['cars' => $cars]);
    }
}
