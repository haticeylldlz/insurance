@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Edit Car') }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- FORM --}}
    <form action="{{ route('cars.update', $car) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')

        {{-- REG NUMBER --}}
        <div class="mb-3">
            <label for="reg_number" class="form-label">{{ __('Registration Number') }}</label>
            <input type="text" name="reg_number" id="reg_number"
                   value="{{ old('reg_number', $car->reg_number) }}"
                   class="form-control @error('reg_number') is-invalid @enderror"
                   placeholder="{{ __('Registration Number') }}" autocomplete="off" maxlength="32">
            @error('reg_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- BRAND --}}
        <div class="mb-3">
            <label for="brand" class="form-label">{{ __('Brand') }}</label>
            <input type="text" name="brand" id="brand"
                   value="{{ old('brand', $car->brand) }}"
                   class="form-control @error('brand') is-invalid @enderror"
                   placeholder="{{ __('Brand') }}" autocomplete="off">
            @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- MODEL --}}
        <div class="mb-3">
            <label for="model" class="form-label">{{ __('Model') }}</label>
            <input type="text" name="model" id="model"
                   value="{{ old('model', $car->model) }}"
                   class="form-control @error('model') is-invalid @enderror"
                   placeholder="{{ __('Model') }}" autocomplete="off">
            @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- OWNER --}}
        <div class="mb-3">
            <label for="owner_id" class="form-label">{{ __('Owner') }}</label>
            <select name="owner_id" id="owner_id"
                    class="form-select @error('owner_id') is-invalid @enderror">
                <option value="">{{ __('Select Owner') }}</option>

                @foreach($owners as $owner)
                    <option value="{{ $owner->id }}"
                        @selected(old('owner_id', $car->owner_id) == $owner->id)>
                        {{ $owner->name }} {{ $owner->surname }}
                    </option>
                @endforeach
            </select>

            @error('owner_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- PHOTO UPLOAD (ADD NEW) --}}
        <div class="mb-3">
            <label class="form-label">{{ __('Add New Photos') }}</label>

            <input type="file" name="photos[]" multiple
                   class="form-control @error('photos') is-invalid @enderror @error('photos.*') is-invalid @enderror">

            @error('photos')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @error('photos.*')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- CURRENT PHOTOS --}}
        <div class="mb-3">
            <label class="form-label">{{ __('Current Photos') }}</label>

            <div class="d-flex flex-wrap gap-3">

                @foreach($car->photos as $photo)
                    <div class="text-center">

                        <img src="{{ asset('storage/' . $photo->path) }}"
                             width="120" class="rounded border">

                        <div class="form-check mt-2">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                name="delete_photo_ids[]"
                                value="{{ $photo->id }}"
                                id="delete_photo_{{ $photo->id }}"
                                @checked(collect(old('delete_photo_ids', []))->contains((string) $photo->id) || collect(old('delete_photo_ids', []))->contains($photo->id))
                            >
                            <label class="form-check-label text-danger" for="delete_photo_{{ $photo->id }}">
                                {{ __('Delete') }}
                            </label>
                        </div>

                    </div>
                @endforeach

            </div>

            @error('delete_photo_ids')
                <div class="text-danger small mt-2">{{ $message }}</div>
            @enderror
            @error('delete_photo_ids.*')
                <div class="text-danger small mt-2">{{ $message }}</div>
            @enderror
        </div>

        {{-- SUBMIT --}}
        <button type="submit" class="btn btn-success">
            {{ __('Update') }}
        </button>
    </form>
</div>
@endsection
