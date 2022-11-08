<?php

namespace App\Http\Controllers;
use App\Models\Ayoube;
use App\Models\Omar;
use Illuminate\Http\Request;

class GestionBrief extends Controller
{
    public function select(){
        $results = Ayoube::all();
        return view('welcome',compact('results'));
        
    }
}
