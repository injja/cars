<?php

namespace App\Services\Cars;

use Illuminate\Support\Facades\DB;
use App\Models\Cars\Car;

class CarsService
{
    public Car $carModel;

    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }

    public function list($vin, $color, $minPrice, $description)
    {

        return $this->carModel->filterByVin($vin)->filterByColor($color)->filterByminPrice($minPrice)->filterByDescription($description)->get();
    }
}
