
@extends('layouts.app')

@section('content')
<h2>{{ __('Car Owners') }}</h2>

{{-- SADECE ADMIN GÖRÜR --}}
@if(auth()->user() && auth()->user()->role === 'admin')
    <a href="{{ route('owners.create') }}" class="btn btn-success mb-3">{{ __('Add Owner') }}</a>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>{{ __('ID') }}</th>
            <th>{{ __('Name') }}</th>
            <th>{{ __('Surname') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        @foreach($owners as $owner)
        <tr>
            <td>{{ $owner->id }}</td>
            <td>{{ $owner->name }}</td>
            <td>{{ $owner->surname }}</td>
            <td>

                {{-- SADECE ADMIN --}}
                @if(auth()->user() && auth()->user()->role === 'admin')

                    <a href="{{ route('owners.edit', $owner) }}" class="btn btn-warning">{{ __('Edit') }}</a>

                    <form action="{{ route('owners.destroy', $owner) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">{{ __('Delete') }}</button>
                    </form>

                @else
                    <span class="text-muted">{{ __('No actions') }}</span>
                @endif

            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
