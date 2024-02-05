@extends('layout.app')
    <h2>
        comics
    </h2>

    <section class="series">
        <div class="container">
            <div class="row">
                <div class="row row-cols-md-4 row-cols-xl-4 g-3">
                    @forelse ($comics as $comic )
                        <div class="col">
                            <a href=" {{ route('guest.comics.show', $comic['id']) }}">

                           
                                <div class="card">
                                    <img src=" {{ $comic['thumb'] }} " alt="">

                                </div>
                                <div class="card-body">
                                    <p>
                                        {{ $comic['series'] }}
                                    </p>

                                </div>
                            </a>

                        </div>
                        
                    @empty
                        
                        <h2>
                            Non c'è nulla da vedere!
                        </h2>
                        
                    @endforelse

                </div>

            </div>

        </div>

    </section>

@section('main-content')

@endsection