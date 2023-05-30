@extends('layouts.app')

@section('content')
layout coming soon...🙄

<ul>
    @forelse($comics as $comic)
    <li>
        {{ $comic->title }} <br>
        {{ $comic->description }} <br>
        <img src="{{ $comic->thumb }}" alt=""> <br>
        {{ $comic->price }} <br>
        {{ $comic->series }} <br>
        {{ $comic->sale_date }} <br>
        {{ $comic->type }} <br>
    </li>
    @empty
    <p>sorry we don't have comic for you 😝</p>
    @endforelse
</ul>

@endsection