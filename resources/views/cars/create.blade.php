@extends('layouts.app')

@section('content')
    <form action="{{ route('cars.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="brand" class="form-label">Brand:</label>
            <input type="text" class="form-control" id="brand" name="brand">
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" class="form-control" id="model" name="model">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="cc" class="form-label">CC:</label>
            <input type="text" class="form-control" id="cc" name="cc">
        </div>
        <div class="mb-3">
            <label for="year_release" class="form-label">Year release:</label>
            <input type="text" class="form-control" id="year_release" name="year_release">
        </div>
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
@endsection
