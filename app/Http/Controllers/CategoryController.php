<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
      public function categorysearch(Request $request)
    {
    // リクエストからカテゴリーIDを取得
        $categoryId = $request->input('category');

        if ($categoryId) {
             // 選択されたカテゴリーの情報を取得
            $selectedCategory = Category::find($categoryId);
        }
        
        $shops = Shop::query();

        if ($categoryId) {
            // カテゴリーIDによるフィルタリングを適用
            $shops->where('category_id', $categoryId);
        }
       
        $filteredShops = $shops->get();
        
        return view('shops.categoryshop')->with(['shops' => $filteredShops, 'category' => $selectedCategory]);
    }
}