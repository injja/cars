<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    public function destroy($id)
    {
        DB::table('brands')->where('id', $id)->delete();
        return redirect()->route('brands.list');
    }
}
