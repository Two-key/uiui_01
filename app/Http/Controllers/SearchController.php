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
        $towns = Town::where('t_name', 'LIKE', "%{$search}%")->get();
        
        // クエリログを有効化し、ログを取得
        \DB::enableQueryLog();
        $townsQuery = Town::where('t_name', 'LIKE', "%{$search}%")->toSql();
        \DB::getQueryLog();
        
        if ($search) {
            // カテゴリーIDによるフィルタリングを適用
            $filteredTowns = $towns;
        } else {
            $filteredTowns = Town::all();
        }
        
        return view('shops.home')->with(['towns' => $filteredTowns, 'search' => $search, 'townsQuery' => $townsQuery]);
    }
    public function about(Town $town)
    {
        $town = Town::find(1); 
        return view('shops.about', ['town' => $town]);
    }
}
