<!-- <header>
    <a href=" {{ route('index') }} ">Home</a>
    <a href=" {{ route('admin.comics.index') }} ">Admin</a>

</header> -->

<header>
    <section id="top-header">
        <div class="container py-1 text-end text-uppercase">
            <span>
                dc power&#8480; visa&#174;
            </span>

            <a class="d-inline-block ms-5" href=" {{ route('admin.comics.index') }} ">
                additional dc sites&#9660;
            </a>
        </div>
    </section>

    <div class="container py-2">
        <div class="row">

            <div class="col-auto">
                <a href="{{ route('index') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" width="80">
                </a>
            </div>

            <div class="col-auto px-0 justify-content-center align-items-center">
                <ul class="d-flex m-0 text-uppercase p-0 align-items-center h-100">
                    @foreach( $pages as $page )
                        <li class=" {{ Route::currentRouteName() === $page ? 'current' : ''}} me-2">
                            <a href="{{ route('index') }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-auto ps-0">
                <input type="text" name="" id="" placeholder="...Search &#128270" class="text-end">
            </div>
        </div>
    </div>



    <section id="jumbo"></section>
</header>