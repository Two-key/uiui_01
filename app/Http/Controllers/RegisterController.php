<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;
use App\Models\User;
class RegisterController extends Controller
{
   public function registerTown(Mytown $mytown)
    {
        $mytown = new Mytown();
        $mytown->town_id = $town->id;
        $mytown->user_id = Auth::user()->id;
        $mytown->save();
    
        return redirect('/');
    }
}
