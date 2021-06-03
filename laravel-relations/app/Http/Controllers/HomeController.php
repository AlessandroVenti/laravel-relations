<?php

namespace App\Http\Controllers;
use App\Car;
use App\Pilot;
use App\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller {
    
    public function homeFunction() {
        $cars = Car::all();
        return view('pages.home', compact('cars'));
    }

    public function pilotFunction($id) {
        $pilot = Pilot::findOrFail($id);
        return view('pages.pilot', compact('pilot'));
    }

    public function brandFunction($id){
        $brand = Brand::findOrFail($id);
        return view('pages.brand', compact('brand'));
    }
    
}
