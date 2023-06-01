@extends('layouts.app')

@section('content')
<div class="container">

    <div class="text-center my-3">
        <h6><strong>Editing: </strong> {{$comic->title}} </h6>
        <img src="{{$comic->thumb}}" alt="" width="250">
    </div>

    <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label fs-4 fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Zelda" aria-describedby="nameHelper" value="{{$comic->title}}" required>
            <small id="nameHelper" class="text-muted">Change Title</small>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fs-4 fw-bold">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https://" aria-describedby="thumbHelper" value="{{$comic->thumb}}" required>
            <small id="thumbHelper" class="text-muted">Change Image Path</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fs-4 fw-bold">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Nintendo Switch" aria-describedby="descriptionHelper" value="{{$comic->description}}">
            <small id="descriptionHelper" class="text-muted">Change Desciption</small>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fs-4 fw-bold">Price</label>
            <input type="text" step="0.01" name="price" id="price" class="form-control" placeholder="99.99" aria-describedby="priceHelper" value="{{ old('price', $comic->price) }}" required>
            <small id="priceHelper" class="text-muted">Change Price</small>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fs-4 fw-bold">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" placeholder="Zelda" aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted">Change Sale Date</small>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label fs-4 fw-bold">Type</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="Zelda" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Change Type</small>
        </div>

        <button type="submit" class="btn btn-primary">Add comic</button>
    </form>

</div>


@endsection