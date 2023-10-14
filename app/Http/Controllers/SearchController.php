<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town; // Town モデルを使用するためにインポート

class SearchController extends Controller
{
    public function search()
    {
        // モデルからデータを取得
        $towns = Town::orderBy('created_at', 'asc')->where(function ($query) {
            // 検索機能
            if ($search = request('search')) {
                $query->where('t_name', 'LIKE', "%{$search}%");
            }
        })->paginate(8);

        return view('your_view', compact('towns')); // テンプレートにデータを渡す
    }
}
