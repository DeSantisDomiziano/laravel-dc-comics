<footer>
<section id="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <div class="row row-cols-3">
                        <div class="col">
                            <h4 class="text-uppercase">dc comics</h4>

                            <ul class="p-0 mb-4">
                                @foreach( $dcComics as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>

                            <h4 class="text-uppercase">shop</h4>

                            <ul class="p-0">
                                @foreach( $shop as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h4 class="text-uppercase">dc</h4>

                            <ul class="p-0">
                                @foreach( $dc as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h4 class="text-uppercase">sites</h4>

                            <ul class="p-0">
                                @foreach( $sites as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                <p class="m-0">
                    All Site Content TM and &#169; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <br> <a href="#">Cookies Settings</a>
                </p>
                </div>
                <div class="col-6" id="logo"></div>

            </div>
        </div>
</section>

<section id="footer-bottom">
        <div class="container py-4">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <button type="button" class="btn rounded-0 border-primary text-white text-uppercase">sign-up now!</button>
                </div>

                <div class="col-auto">
                    <p href="#" class="text-uppercase m-0 text-primary d-inline-block">follow us</p>

                    @foreach( $socials as $social)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/' . $social) }}" alt="">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</footer>