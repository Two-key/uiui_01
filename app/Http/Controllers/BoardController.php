<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
use App\Models\Article;
use App\Models\Trouble;

class BoardController extends Controller
{
    public function article(Town $town, Article $article)
    {
        $articles = Article::where('town_id', $town->id)->get();

        return view('towns.article', ['town' => $town, 'articles' => $articles]);
    }
    public function trouble(Trouble $trouble, Town $town)
    {
        $troubles = Trouble::where('town_id', $town->id)->get();
        
        return view('towns.trouble', ['town' => $town, 'troubles' => $troubles]);
    }
}
