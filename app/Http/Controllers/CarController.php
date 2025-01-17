<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    //Shows all cars
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        
        $cars = Car::query();
        if($searchTerm){
            $cars = Car::where('name', 'like', "%{$searchTerm}%")
                        ->orWhere('price', 'like', "%{$searchTerm}%");
        }
        
        $cars = $cars->orderBy('id', 'desc')->paginate(6);
    
        return view('cars.index', compact('cars', 'searchTerm'));
    }

    //show single car
    public function show($id){
        //Passing variable $car tothe view using this controller
        $car = Car::find($id);
        return view('cars.show', compact('car'));
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
            'price' => 'required',
            'car_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:2048'
        ]);

        if($request->hasFile('car_image')){
            $imagePath = request('car_image')->store('car_images', 'public');
            $form_fields['car_image'] = $imagePath;
        }
        
        
        Car::create($form_fields);
        return redirect('/')->with('message', 'Car created Successfully');
    }
    
}
