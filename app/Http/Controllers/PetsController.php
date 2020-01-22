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

    public function owner(){
        $owner = \App\Owner::all();
        return view('owner', compact('owners'));
    }
}
