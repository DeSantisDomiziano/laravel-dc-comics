@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="table-responsive rounded-4">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <caption>Comicbooks</caption>
                <tr>
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
                            <img src=" {{ $comic->thumb }} " alt="" height="200">
                        </td>
                        <td scope="row"> {{ $comic->title }}</td>
                        <td scope="row"> {{ $comic->price }}</td>
                        <td scope="row"> 
                            <a href="" class="mx-1">
                                <i class="fa-solid fa-xl fa-pen" title="edit"></i>
                            </a>
                            <a href="" class="mx-1">
                                <i class="fa-solid fa-xl fa-eye" title="view"></i>
                            </a>
                            <a href="" class="mx-1">
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