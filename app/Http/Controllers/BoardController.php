<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
use App\Models\Article;

class BoardController extends Controller
{
    public function article(Town $town, Article $article)
    {
        //dd($information);
        $articles = Article::where('town_id', $town->id)->get();

        return view('towns.article', ['town' => $town, 'articles' => $articles]);
    }
    public function trouble(Request $request, Town $town)
    {
        return view('towns.trouble', ['town' => $town, 'rules' => $rules]);
    }
}
