@extends('layouts.app')

@section('content')
<div class="container py-5">

    <div class="px-5">
        @if(session('message'))
        <div class="alert alert-success p-4">
            <strong class="fs-4">
                {{ session('message') }}
            </strong>
        </div>
        @endif
    </div>

    <div class="text-end">
        <a href="{{ route('admin.comics.create') }}" class="btn btn-info my-3 px-4 text-white fw-bold">
            <i class="fa-solid fa-plus"></i>
            ADD
        </a>
    </div>
    <div class="table-responsive rounded-4">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <caption>Comicbooks</caption>
                <tr class="text-center">
                    <th>ID</th>
                    <th>THUMB</th>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>ACTION</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($comics as $comic)
                    <tr class="table-primary" >
                        <td scope="row">{{ $comic->id }}</td>
                        <td scope="row">
                            <img src=" {{ $comic->thumb }} " alt="" width="150">
                        </td>
                        <td scope="row" class="text-center"> {{ $comic->title }}</td>
                        <td scope="row" class="text-center"> {{ $comic->price }}</td>
                        <td scope="row" class="text-center"> 
                            <a href="{{ route('admin.comics.show', $comic->id) }}" class="mx-2">
                                <i class="fa-solid fa-xl fa-eye" title="view"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fa-solid fa-xl fa-pen" title="edit"></i>
                            </a>
                            <a href="" class="mx-2">
                                <i class="fa-solid fa-xl fa-trash" title="view"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr class="table-primary" >
                        <td scope="row">There aren't comicbooks 😐</td>
                    </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>
    
</div>
@endsection