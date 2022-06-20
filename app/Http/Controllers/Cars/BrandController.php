<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Cars\BrandService;

class BrandController extends Controller
{
    public BrandService $brandService;

    public function __construct(BrandService $brandService)
    {
        $this->brandService = $brandService;
    }


    public function destroy($id)
    {
        $brand = $this->brandService->destroy($id);
        return redirect()->route('brands.list');
    }

    public function show($id)
    {
        $brand = $this->brandService->show($id);
        return view('Cars.brandShow', ['brand' => $brand]);
    }
}
