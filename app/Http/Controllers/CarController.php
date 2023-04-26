<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //Shows all cars
    public function index(){
        return view('car.index', [
            'car' => Car::latest()->paginate(4)
        ]);
    }

    //Show create car form
    public function create(){
        return view('car.create');
    }

    //stores car fron car_form to database 
    public function store(Request $request){
        $form_fields = $request->validate([
            'name' => 'required',
            'horsepower' => 'required',
            'topspeed' => 'required',
            'acceleration' => 'required',
            'model' => ['required', 'date'],
            'price' => 'required' 
        ]);
        //
        $form_fields['user_id'] = auth()->id();
        
        Car::create($form_fields);
        return redirect('/')->with('message', 'Car created Successfully');
    }

    //Show edit form

    public function edit(Car $car){
        return view('car.edit', ['car' => $car]);
    }
}
