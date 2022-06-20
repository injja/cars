<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Cars\CarService;
use App\Http\Requests\Cars\CreateCarRequest;
use PhpParser\Node\Identifier;

class CarController extends Controller
{
    public CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function show($id)
    {
        // $car = DB::table('cars')->where('id', $id)->first();
        //$car = DB::table('cars')->find($id);
        $car = $this->carService->show($id);
        return view('Cars.show', ['car' => $car]);
    }

    public function destroy($id)
    {
        $car = $this->carService->destroy($id);
        //DB::table('cars')->where('id', $id)->delete();
        return redirect()->route('cars.list');
    }

    public function getCreateView()
    {
        return view('cars.create');
    }

    public function create(CreateCarRequest $request)
    {
        $car = $request->all();

        $this->carService->create($car);

        return redirect()->route('cars.list');
    }

    public function getUpdateView($id)
    {
        $car = $this->carService->show($id);

        return view('cars.update', ['car' => $car]);
    }

    public function update(Request $request, $id)
    {
        $newCar = $request->all();
        $this->carService->update($id, $newCar);
        return redirect()->route('cars.list');
    }

    public function addPhoto(Request $request)
    {

        $file = $request->file("file");
        $id = $request->get("id");
        $this->carService->addPhoto($file, $id);
        return redirect()->route('cars.show', ['id' => $id]);
    }
}
