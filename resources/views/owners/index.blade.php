@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Car Owners</h2>
    <a href="{{ route('owners.create') }}" class="btn btn-primary mb-3">Add Owner</a>

    <table class="table">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Actions</th>
        </tr>

        @foreach($owners as $owner)
        <tr>
            <td>{{ $owner->name }}</td>
            <td>{{ $owner->surname }}</td>
            <td>
                <a href="{{ route('owners.edit', $owner) }}" class="btn btn-warning">Edit</a>

                <form action="{{ route('owners.destroy', $owner) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
