<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarsRequest;
use App\Http\Requests\UpdateCarsRequest;
use App\Models\Car;
use Illuminate\Http\Request;


class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarsRequest $request)
    {
        $form_data = $request->all();

        $newCar = new Car();
        $newCar->fill($form_data);
        $newCar->save();

        return redirect()->route('cars.show', ['car' => $newCar->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarsRequest $request, Car $car)
    {
        $form_data = $request->all();

        $car->update($form_data);

        return redirect()->route('cars.show', ['car' => $car->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
