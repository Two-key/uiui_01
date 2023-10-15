<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // クエリから検索キーワードを取得
        $search = $request->input('search');
        
        // 町の名前を検索
        $towns = Town::where('name', 'like', "%{$search}%")->get();
        
        // クエリログを有効化し、ログを取得
        \DB::enableQueryLog();
        $townsQuery = Town::where('name', 'like', "%{$search}%")->toSql();
        \DB::getQueryLog();
        
        if ($search) {
            // カテゴリーIDによるフィルタリングを適用
            $filteredTowns = $towns;
        }
        
        return view('shops.home')->with(['towns' => $filteredTowns, 'search' => $search, 'townsQuery' => $townsQuery]);
    }
    public function about(Town $town)
    {
        $town = Town::find(1); 
        return view('shops.about', ['town' => $town]);
    }
    public function shopsearch(Shop $shop)
    {
        return view('shops.home')->with(['shops' => $shop->get()]);;
    }
}
