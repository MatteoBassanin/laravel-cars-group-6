@extends('layouts.app')

@section('content')
    <form action="{{ route('cars.update', ['car' => $car->id]) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="brand" class="form-label">Brand:</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand"
                value="{{ old('brand', $car->brand) }}">
            @error('brand')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model"
                value="{{ old('model', $car->model) }}">
            @error('model')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" min="0" step="0.01" class="form-control @error('price') is-invalid @enderror"
                id="price" name="price" value="{{ old('price', $car->price) }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cc" class="form-label">CC:</label>
            <input type="text" class="form-control @error('cc') is-invalid @enderror" id="cc" name="cc"
                value="{{ old('cc', $car->cc) }}">
            @error('cc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year_release" class="form-label">Data di rilascio:</label>
            <input type="date" class="form-control @error('year_release') is-invalid @enderror" id="year_release"
                name="year_release" value="{{ old('year_release', $car->year_release) }}">
            @error('year_release')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <div class="mb-3">Optionals:</div>
            <div class="btn-group">
                @foreach ($optionals as $optional)
                    @if ($errors->any())
                        <input type="checkbox" class="btn-check" @if (in_array($optional->id, old('optionals', []))) checked @endif
                            name="optionals[]" value="{{ $optional->id }}" id="optional_{{ $optional->id }}">
                    @else
                        <input type="checkbox" class="btn-check" @if ($car->optionals->contains($optional->id)) checked @endif
                            name="optionals[]" value="{{ $optional->id }}" id="optional_{{ $optional->id }}">
                    @endif
                    <label class="btn btn-outline-primary"
                        for="optional_{{ $optional->id }}">{{ $optional->name }}</label>
                @endforeach
                @error('optionals')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a class="btn btn-danger" href="{{ route('cars.index') }}">Go back</a>
    </form>
@endsection
