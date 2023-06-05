<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        if (count($cars) <> 0) {
            return response()->json([
                'success' => true,
                'cars' => $cars
            ]);
        } else {
            return response()->json([
                'success' => false,
                'errors' => 'Nessuna macchina trovata'
            ]);
        }
    }

    public function show($id)
    {
        $car = Car::where('id', $id)->first();

        if ($car) {
            return response()->json([
                'success' => true,
                'car' => $car
            ]);
        } else {
            return response()->json([
                'success' => false,
                'errors' => 'Nessuna macchina trovata'
            ]);
        }
    }
}
