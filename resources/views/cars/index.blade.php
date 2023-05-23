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
                                    </tr>
                              </thead>
                              <tbody>
                                    @foreach ($cars as $car)
                                          <tr>
                                                <th scope="row">{{ $car->id }}</th>
                                                <td>{{ $car->brand }}</td>
                                                <td>{{ $car->model }}</td>
                                                <td>{{ $car->price }}</td>
                                          </tr>
                                    @endforeach

                              </tbody>
                        </table>
                  </div>
            </div>
      </div>
@endsection
