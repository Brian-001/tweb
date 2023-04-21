<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        return view('car.index');
    }
    public function create(){
        return view('car.create');
    }
}
