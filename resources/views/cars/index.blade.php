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

                                    <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="POST"
                                        class="form_delete_post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <a href="{{ route('cars.create') }}" class="btn btn-primary">Create new car</a>
            </div>
        </div>
    </div>
    {{-- MODALE --}}
    <div class="modal fade" id="confirmDeleteModal" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Warning!
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="confirmDelete btn btn-success">Daje</button>
                </div>
            </div>
        </div>
    </div>
@endsection
