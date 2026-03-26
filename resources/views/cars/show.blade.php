
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Car Details') }}</h2>

    <p><strong>{{ __('Registration Number') }}:</strong> {{ $car->reg_number }}</p>
    <p><strong>{{ __('Brand') }}:</strong> {{ $car->brand }}</p>
    <p><strong>{{ __('Model') }}:</strong> {{ $car->model }}</p>
    <p><strong>{{ __('Owner') }}:</strong> {{ $car->owner->name ?? '' }} {{ $car->owner->surname ?? '' }}</p>

    {{-- SADECE ADMIN --}}
    @if(auth()->user() && auth()->user()->role === 'admin')

        <a href="{{ route('cars.edit', $car) }}" class="btn btn-warning mt-2">{{ __('Edit Car') }}</a>

        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger mt-2">{{ __('Delete Car') }}</button>
        </form>

    @endif

    <br>
    <a href="{{ route('cars.index') }}" class="btn btn-primary mt-3">{{ __('Back to Cars') }}</a>
</div>
@endsection
