@extends('layouts.app')

@section('content')

<div class="container p-5">

    <div class="card" max-width="500">
        <img src="{{ $comic->thumb }}" alt="" class="card-img-top">
    </div>

</div>

@endsection