<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Component;

class Search extends Component
{
    public $searchTerm='';

    public $cars;

    public function mount()
    {
        $this->cars = Car::all();
    }

    public function updatedSearchTerm()
    {
        $this->cars = Car::where('name', 'like', '%'.$this->searchTerm.'%')->get();
    }

    public function render()
    {
        return view('livewire.search', ['cars' => $this->cars]);
    }
}
