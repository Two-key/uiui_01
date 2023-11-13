<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Town;
use App\Models\Shop;
use App\Models\Rule;
use App\Models\Article;

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

    public function shopsearch(Town $town ,Shop $shop)
    {
        $town = Town::find(1); 
        return view('shops.shop')->with(['shops' => $shop->get()]);;
    }
    public function rule(Town $town, Rule $rule)
    {
        $rules = Rule::where('town_id', $town->id)->get();
    
        return view('towns.rule', ['town' => $town, 'rules' => $rules]);
    }
}
