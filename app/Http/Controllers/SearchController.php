<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;
use App\Models\Shop;
use App\Models\Rule;
use App\Models\Article;
use App\Models\Trouble;
use App\Models\Category;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $search = $request->input('search');
    
    // 町の名前を検索
    $towns = Town::where('name', 'like', "%{$search}%")->get();
    
    if ($search) {
        // カテゴリーIDによるフィルタリングを適用
        // この部分は要件に応じて追加
        $filteredTowns = $towns;

        // 検索結果の町の名前をセッションに保存
        $request->session()->put('selected_town_name', $filteredTowns->first()->name);
    } else {
        $filteredTowns = [];
    }
    return view('shops.home')->with(['towns' => $filteredTowns, 'search' => $search]);
}

   public function about(Request $request, Town $town)
{
    // セッションから町の名前を取得
    $selectedTownName = $request->session()->get('selected_town_name');
    
    return view('shops.about', ['town' => $town, 'selectedTownName' => $selectedTownName]);
}

    public function articlesearch(Town $town, Request $request)
{
    $articles = Article::where('town_id', $town->id)->get();
    
    $articlesearch = $request->input('articlesearch');
    
    $articles = Article::where('title', 'like', "%{$articlesearch}%")->get();
    
    if ($articlesearch) {
        
        $filteredArticles = $articles;

        $request->session()->put('selected_article_name', $filteredArticles->first()->name);
    } else {
        $filteredArticles = [];
    }
    return view('towns.article')->with(['articles' => $filteredArticles, 'articlesearch' => $articlesearch, 'town' => $town]);
}

    public function troublesearch(Town $town, Request $request)
{
    $troubles = Trouble::where('town_id', $town->id)->get();
    
    $troublesearch = $request->input('troublesearch');
    
    $troubles = Trouble::where('title', 'like', "%{$troublesearch}%")->get();
    
    if ($troublesearch) {
        
        $filteredTroubles = $troubles;

        $request->session()->put('selected_trouble_name', $filteredTroubles->first()->name);
    } else {
        $filteredTroubles = [];
    }
    return view('towns.trouble')->with(['troubles' => $filteredTroubles, 'troublesearch' => $troublesearch, 'town' => $town]);
}

    public function shopsearch(Town $town, Request $request, Category $category)
{
    // 最初のクエリで指定された都市の店舗を取得
    $townShops = Shop::where('town_id', $town->id)->get();

    // 検索キーワードを取得
    $shopsearch = $request->input('shopsearch');

    //検索キーワードがある場合、名前にキーワードが含まれる店舗を検索
    if ($shopsearch) {
        $filteredShops = Shop::where('name', 'like', "%{$shopsearch}%")->get();

        // 検索結果がある場合、最初の店舗の名前をセッションに保存
        if ($filteredShops->isNotEmpty()) {
            $request->session()->put('selected_shop_name', $filteredShops->first()->name);
        }
    } else {
        // 検索キーワードがない場合は指定された都市の店舗を表示
        $filteredShops = $townShops;
    }

    // view にデータを渡す
    return view('shops.shopsearch')->with([
        'shops' => $filteredShops,
        'shopsearch' => $shopsearch,
        'town' => $town,
        'categories' => $category
    ]);
}

   

    
    
    public function rule(Town $town, Rule $rule)
    {
        $rules = Rule::where('town_id', $town->id)->get();
    
        return view('towns.rule', ['town' => $town, 'rules' => $rules]);
    }
}
