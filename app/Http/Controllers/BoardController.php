<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;

class BoardController extends Controller
{
    public function newIformation(Request $request, Town $town)
    {
        return view('towns.newInformation', ['town' => $town]);
    }
    public function trouble(Request $request, Town $town)
    {
        return view('towns.trouble', ['town' => $town]);
    }
}
