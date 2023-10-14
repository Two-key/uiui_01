<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function home(Category $category)
    {
        // カテゴリーに関連するグループ一覧を取得し、ビューに渡す
        return view('shops.home');
    }
}
