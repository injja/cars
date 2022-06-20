<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Cars\ModelService;

class ModelController extends Controller

{
    public ModelService $modelService;

    public function __construct(ModelService $modelService)
    {
        $this->modelService = $modelService;
    }

    public function destroy($id)
    {
        DB::table('models')->where('id', $id)->delete();
        return redirect()->route('cars.list');
    }

    public function show($id)
    {
        $model = $this->modelService->show($id);
        return view('cars.modelShow', ['model' => $model]);
    }
}
