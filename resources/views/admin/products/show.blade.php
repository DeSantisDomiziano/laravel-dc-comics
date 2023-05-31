@extends('layouts.app')

@section('content')

<div class="container p-5">

    <div class="card my-5 shadow-lg border-0" id="card_show">
       <img src="{{ $comic->thumb }}" alt="" class="card-img-top">
       <div class="card-body">
            <strong>
                {{ $comic->title }}
            </strong>
            <p>
                {{ $comic->description }}
            </p>
       </div>
       <div class="card-footer text-end">
           <p>
               {{ $comic->series }}
            </p>
            <p>
                {{ $comic->sale_date }}
            </p>
            <p>
                {{ $comic->price }}
            </p>
       </div>
    </div>

</div>

@endsection