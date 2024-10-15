@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Redaguoti konferenciją</h1>

    <form action="{{ route('conferences.update', $conference['id']) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Pavadinimas</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $conference['name'] }}" required>
        </div>
        <div class="form-group">
            <label for="description">Aprašymas</label>
            <textarea name="description" id="description" class="form-control" required>{{ $conference['description'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atnaujinti</button>
    </form>
</div>
@endsection