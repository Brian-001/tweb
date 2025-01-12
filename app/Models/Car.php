<?php

namespace App\Models;


use NumberFormatter;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'horsepower', 'topspeed', 'acceleration', 'model', 'price', 'car_image']; 

    //Accessor in Car model to format price
    public function getFormattedPriceAttribute()
    {
        try {
            $locale = App::getLocale();
            $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY); 
            return $formatter->formatCurrency($this->price, 'USD'); 
        } catch (\Exception $e) {
            // Handle the exception gracefully (e.g., log the error, provide a default value)
            Log::error("Error formatting price: " . $e->getMessage()); 
            return $this->price; // Return the price without formatting in case of an error
        }
    }
}
