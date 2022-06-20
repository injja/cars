<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelsController extends Controller
{
    public function list()
    {
        $models = DB::table('models')->get();
        return view('Cars.models', ['models' => $models]);
    }
}
