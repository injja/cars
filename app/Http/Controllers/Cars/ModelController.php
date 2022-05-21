<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
    public function destroy($id)
    {
        DB::table('models')->where('id', $id)->delete();
        return redirect()->route('cars.list');
    }
}
