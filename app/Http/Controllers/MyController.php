<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function select(){
        $data=MyModel::all();
        return view('select',compact('data'));
    }

    public function add(){
        return view('index');
    }

    public function insert(Request $req){
        $mymodel= new MyModel();
        $mymodel->nom=$req->name;
        $mymodel->save();

    }
}


