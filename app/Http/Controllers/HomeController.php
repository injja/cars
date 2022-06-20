<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function homePage(Request $request)
   {
      dd($request->user());
      return view('home');
   }
}
