<main>
    @extends('layouts.app')

@section('title', 'Sponsors')

@section('content')
    <h1>Our Sponsors</h1>
    @foreach($sponsors as $sponsor)
        <div>
            <img src="{{ asset('storage/' . $sponsor->logo) }}">
            <h3>{{ $sponsor->name }}</h3>
        </div>
    @endforeach
@endsection
</main>