@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Price</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <th scope="row">{{ $car->id }}</th>
                                <td>{{ $car->brand }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->price }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('cars.show', ['car' => $car->id]) }}">Show</a>
                                    <a class="btn btn-warning" href="{{ route('cars.edit', ['car' => $car->id]) }}">Edit</a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <a href="{{ route('cars.create') }}" class="btn btn-primary">Create new car</a>
            </div>
        </div>
    </div>
@endsection
