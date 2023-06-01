@extends('layouts.app')

@section('content')
<div class="container py-5 bg-dark-subtle rounded-4 my-4">

    <div class="text-center my-3">
        <h6><strong>Editing: </strong> {{$comic->title}} </h6>
        <img src="{{$comic->thumb}}" alt="" width="250">
    </div>

    <form action="{{route('admin.comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label fs-4 fw-bold">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" aria-describedby="nameHelper" value="{{ old('title', $comic->title) }}" required>
            <small id="nameHelper" class="text-muted">Change Title</small>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fs-4 fw-bold">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" aria-describedby="thumbHelper" value="{{ old('thumb', $comic->thumb) }}" required>
            <small id="thumbHelper" class="text-muted">Change Image Path</small>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
          <label for="description" class="form-label fs-4 fw-bold">Description</label>
          <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{old('description', $comic->description)}}
          </textarea>
          <small id="descriptionHelper" class="text-muted">Change Desciption</small>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fs-4 fw-bold">Price</label>
            <input type="text" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" aria-describedby="priceHelper" value="{{ old('price', $comic->price) }}" required>
            <small id="priceHelper" class="text-muted">Change Price</small>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fs-4 fw-bold">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" aria-describedby="sale_dateHelper" value="{{ old('sale_date', $comic->sale_date) }}">
            <small id="sale_dateHelper" class="text-muted">Change Sale Date</small>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label fs-4 fw-bold">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" aria-describedby="typeHelper" value="{{ old('type', $comic->type) }}">
            <small id="typeHelper" class="text-muted">Change Type</small>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Change Comic</button>
    </form>

</div>


@endsection