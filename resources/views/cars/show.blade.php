@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="card mb-5">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $car->brand }}</li>
                <li class="list-group-item">{{ $car->model }}</li>
                <li class="list-group-item">
                    <ul>
                        @forelse ($car->optionals as $optional)
                            <li>
                                <span>{{ $optional->name }}</span>
                            </li>
                        @empty
                            <li>
                                <span>Nessun optional specificato</span>
                            </li>
                        @endforelse
                    </ul>
                </li>
                <li class="list-group-item">{{ $car->price }}</li>
                <li class="list-group-item">{{ $car->cc }}</li>
                <li class="list-group-item">{{ $car->year_release }}</li>
            </ul>
        </div>
        <a class="btn btn-primary" href="{{ route('cars.index') }}">Go back</a>
    </div>
@endsection
