<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Cars\CarsService;

class ApiCarsController extends Controller
{
    public CarsService $carsService;

    public function __construct(CarsService $carsService)
    {
        $this->carsService = $carsService;
    }


    public function list(Request $request)
    {
        $color = $request->get("color");
        $vin = $request->get('vin');
        $minPrice = $request->get("minPrice") ? $request->get("minPrice") : 0;
        $description = $request->get("description");
        $cars = $this->carsService->list($vin, $color, $minPrice, $description);
        return response()->json(['cars' => $cars]);
    }
}
