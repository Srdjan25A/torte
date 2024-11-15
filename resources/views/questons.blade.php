@extends("layouts.app")


@section("content")
    <form action="{{ route('question.add') }}" method="POST">
            @csrf
            <input type="text"  name="title" placeholder="Unesite pitanje">
            <input type="text" name="offered_answer1" placeholder="Ponudjeni odgovori 1">
            <input type="text" name="offered_answer2" placeholder="Ponudjeni odgovori 2">
            <button type="submit">Dodaj pitanje</button>
    </form>
@endsection
