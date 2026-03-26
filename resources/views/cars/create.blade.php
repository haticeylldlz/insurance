@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Add Car') }}</h2>

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <input type="text" name="reg_number" class="form-control mb-2" placeholder="{{ __('Registration Number') }}" required>
        <input type="text" name="brand" class="form-control mb-2" placeholder="{{ __('Brand') }}" required>
        <input type="text" name="model" class="form-control mb-2" placeholder="{{ __('Model') }}" required>

        <select name="owner_id" class="form-control mb-2" required>
            <option value="">{{ __('Select Owner') }}</option>
            @foreach($owners as $owner)
                <option value="{{ $owner->id }}">{{ $owner->name }} {{ $owner->surname }}</option>
            @endforeach
        </select>

        <button class="btn btn-success">{{ __('Save') }}</button>
    </form>
</div>
@endsection
