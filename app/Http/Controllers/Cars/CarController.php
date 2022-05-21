<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function show($id)
    {

        // $car = DB::table('cars')->where('id', $id)->first();
        $car = DB::table('cars')->find($id);
        return view('Cars.show', ['car' => $car]);
    }

    public function destroy($id)
    {
        DB::table('cars')->where('id', $id)->delete();
        return redirect()->route('cars.list');
    }
}
