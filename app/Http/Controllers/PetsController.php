<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Matcher\Ducktype;

class PetsController extends Controller
{
    public function index(){
        $pets = [
            'Vintém',
            'Agatha',
            'Gaspar',
            'Duque',
        ];
        // return view('petsIndex', ['pets'=> $pets]);
        return view('petsIndex', compact('pets'));
    }
}
