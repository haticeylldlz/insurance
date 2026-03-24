@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $owner->name }} {{ $owner->surname }}</h2>

    {{-- SADECE ADMIN --}}
    @if(auth()->user() && auth()->user()->role === 'admin')
        <a href="{{ route('owners.edit', $owner) }}" class="btn btn-warning mb-2">Edit Owner</a>

        <form action="{{ route('owners.destroy', $owner) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mb-2">Delete Owner</button>
        </form>
    @endif

    <h3>Cars</h3>

    @if($cars->count() > 0)
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Registration Number</th>
                    <th>Brand</th>
                    <th>Model</th>

                    {{-- ADMIN için action kolonu --}}
                    @if(auth()->user() && auth()->user()->role === 'admin')
                        <th>Actions</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <td>{{ $car->reg_number }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>

                    {{-- SADECE ADMIN --}}
                    @if(auth()->user() && auth()->user()->role === 'admin')
                    <td>
                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                    @endif

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <p>No cars for this owner yet.</p>
    @endif

    <a href="{{ route('owners.index') }}" class="btn btn-primary mt-3">Back to Owners</a>
</div>
@endsection
