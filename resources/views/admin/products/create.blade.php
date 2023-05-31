@extends('layouts.app')

@section('content')
<div class="container py-5 bg-dark-subtle rounded-4 my-4">
    <form action="{{ route('admin.comics.store') }}" method="post">
    @csrf

        <div class="mb-3">
          <label for="title" class="form-label fs-4 fw-bold">Title</label>
          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Add title</small>
        </div>

        <div class="mb-3">
          <label for="thumb" class="form-label fs-4 fw-bold">Image</label>
          <input type="text" name="thumb" id="thumb" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Add image path</small>
        </div>
        
        <div class="mb-3">
          <label for="description" class="form-label fs-4 fw-bold">Description</label>
          <input type="text" name="description" id="description" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Add description</small>
        </div>

        <div class="mb-3">
          <label for="price" class="form-label fs-4 fw-bold">Price</label>
          <input type="text" name="price" id="price" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Add price</small>
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label fs-4 fw-bold">Sale Date</label>
          <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Add sale date in this form [ YYYY-MM-DD ]</small>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label fs-4 fw-bold">type</label>
          <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="helpId" required>
          <small id="helpId" class="text-muted">Add kind of book</small>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection
