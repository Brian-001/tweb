<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //Shows all cars
    public function index(){
        $cars = Car::orderBy('id','desc')->paginate(4);
        return view('cars.index', compact('cars'));
    }

    //Show create car form
    public function create(){
        return view('cars.create');
    }

    //stores car fron car_form to database 
    public function store(Request $request){
        $form_fields = $request->validate([
            'name' => 'required',
            'horsepower' => 'required',
            'topspeed' => 'required',
            'acceleration' => 'required',
            'model' => 'required',
            'price' => 'required' 
        ]);

        // $form_fields['user_id'] = auth()->id();
        
        Car::create($form_fields);
        return redirect('/')->with('message', 'Car created Successfully');
    }
    
}
