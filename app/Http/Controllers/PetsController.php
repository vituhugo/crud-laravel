<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Ducktype;

class PetsController extends Controller
{
    public function index(){
        // $pets = [
        //     'Vintém',
        //     'Agatha',
        //     'Gaspar',
        //     'Duque',
        // ];
        $pets = \App\Pet::all();
        // return view('petsIndex', ['pets'=> $pets]);
        return view('petsIndex', compact('pets'));
    }

    public function create() {
        $owners = \App\Owner::all();
        return view('petsCreate', compact('owners'));
    }

    public function store(Request $request) {
        $dados = $request->all();
        //Grava os dados

        $pet = new \App\Pet();
        $pet->name = $dados['name'];
        $pet->rga = $dados['rga'];
        $pet->data_nascimento = $dados['data_nascimento'];
        $pet->owner_id = $dados['owner_id'];
        
        $pet->save();

        return back();
    }

}
