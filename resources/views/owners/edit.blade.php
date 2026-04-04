@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Edit Owner') }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('owners.update', $owner) }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input type="text" name="name" id="name" value="{{ old('name', $owner->name) }}"
                   class="form-control @error('name') is-invalid @enderror"
                   placeholder="{{ __('Name') }}" autocomplete="given-name" maxlength="30">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">{{ __('Surname') }}</label>
            <input type="text" name="surname" id="surname" value="{{ old('surname', $owner->surname) }}"
                   class="form-control @error('surname') is-invalid @enderror"
                   placeholder="{{ __('Surname') }}" autocomplete="family-name" maxlength="30">
            @error('surname')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
    </form>
</div>
@endsection
