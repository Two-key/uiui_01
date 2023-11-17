<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;
use App\Models\Shop;

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
     public function shop(Request $request, Shop $shop)
    {
        // セッションから町の名前を取得
        $selectedShopName = $request->session()->get('selected_shop_name');
        
        return view('shops.shop', ['shop' => $shop, 'selectedShopName' => $selectedShopName]);
    }
}
