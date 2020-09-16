<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Pizza;

class PizzaController extends Controller
{
    public function index() {
        
        // $pizzas = Pizza::all();
        $pizzas = DB::select("select * from pizzas");
    
    
        return view('pizzas', [
            
            'pizzas' => $pizzas,
        ]);
    }
    public function show($id) {
        return view('details', ['id' => $id]);
    }
}

