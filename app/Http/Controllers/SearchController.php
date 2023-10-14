<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Town $town)
    {
        $town = Town::orderBy('created_at', 'asc')->where(function ($query) {

            // 検索機能
            if ($search = request('search')) {
                $query->where('t_name', 'LIKE', "%{$search}%")
                ;
            }

            // 8投稿毎にページ移動
        })->paginate(8);
    }
}
