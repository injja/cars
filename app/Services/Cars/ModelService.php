<?php

namespace App\Services\Cars;

use App\Models\Cars\Model;

class ModelService
{
    public Model $carModel;

    public function __construct(Model $carModel)
    {
        $this->carModel = $carModel;
    }

    public function show($id)
    {
        return $this->carModel->find($id);
    }
}
