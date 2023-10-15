<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;

class ShopController extends Controller
{
    public function home(Town $town)
    {
        return view('shops.home')->with(['towns' => $town->get()]);;
    }
    public function overview()
    {
        return view('shops.overview');;
    }
    public function addInformation()
    {
        return view('shops.addInformation');;
    }
}
