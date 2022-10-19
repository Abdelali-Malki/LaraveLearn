<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;

class MyController extends Controller
{
    function select(){
        $data=MyModel::all();
        return view('select',compact('data'));
    }

    function add(){
        return view('index');
    }
    function insert(Request $req){
        $my_model= new MyModel();
        $my_model->nom=$req->add;
        $my_model->save();
    }
    
}


