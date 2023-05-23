<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Database\Seeders\CarsTableSeeder;

class PageController extends Controller
{

    public function index()
    {

        $cars = Car::all();

        return redirect()->route('cars.index', compact('cars'));
        return view('home', compact('cars'));
    }
}
