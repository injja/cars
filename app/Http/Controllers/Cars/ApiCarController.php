<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Cars\CarService;
use App\Http\Requests\Cars\CreateCarRequest;

class ApiCarController extends Controller
{
    public CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function show($id)
    {
        $car = $this->carService->show($id);
        return response()->json(['car' => $car]);
    }

    public function create(CreateCarRequest $request)
    {
        $car = $request->all();
        $this->carService->create($car);
        return response()->json(['message' => "Prawidłowo dodano samochód"]);
    }

    public function destroy($id)
    {
        $car = $this->carService->destroy($id);
        return response()->json(['message' => "Prawidłowo usunięto"]);
    }

    public function update($id, Request $request)
    {
        $newCar = $request->all();
        $this->carService->update($id, $newCar);
        return response()->json(['message' => "Prawidłowo zaktualizowano"]);
    }
}
