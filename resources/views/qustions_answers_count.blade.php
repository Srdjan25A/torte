@extends('layouts.app')

@section('content')
    <h1 style="text-align: center;">Broj odgovora po pitanjima</h1>

    @if (empty($answersPerQuestion))
        <p>Nema podataka o odgovorima.</p>
    @else
        @foreach($answersPerQuestion as $data)
            <div>
                <p><strong>Pitanje:</strong> {{ $data['question'] }}</p>
                <p><strong>Broj odgovora 1:</strong> {{ $data['answer_1_count'] }}</p>
                <p><strong>Broj odgovora 2:</strong> {{ $data['answer_2_count'] }}</p>
                <hr>
            </div>
        @endforeach
    @endif
@endsection
