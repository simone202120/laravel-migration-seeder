<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function mostraListaTreni (){
        $train= Train::whereDate('orario_partenza', '2022-10-03')->get();
        return view('ListaTreni', compact("train"));
    }
}
