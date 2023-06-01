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
                            <a href="{{ route('admin.comics.edit', $comic->id) }}" class="mx-2">
                                <i class="fa-solid fa-xl fa-pen" title="edit"></i>
                            </a>

                            <!-- Modal trigger button -->
                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#{{ $comic->id }}">
                                <i class="fa-solid fa-xl fa-trash text-danger" title="delete"></i>
                            </button>
                            
                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="{{ $comic->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Cancel <br> {{ $comic->title }} </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <span>Do you really want it? 😭</span>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-bs-dismiss="modal">
                                                <i class="fa-solid fa-xl fa-xmark text-success"></i>
                                            </button>
                                            <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                
                                                <button type="submit" class="btn">
                                                    <i class="fa-solid fa-xl fa-trash text-danger" title="delete"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- Optional: Place to the bottom of scripts -->
                            <script>
                                const myModal = new bootstrap.Modal(document.getElementById('{{ $comic->id }}'), options)
                            
                            </script>
                            
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