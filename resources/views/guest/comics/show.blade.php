@extends('layout.app')
    <h2>
        comics
    </h2>

    <section class="series">
        <div class="container">
            <div class="row">
                <div class="row mb-3">
                   
                        <div class="col-7 m-3 p-3">

                            <h2 class="text-center">
                                {{ $comic['title'] }}
                            </h2>

                            <div class="card-image text-center">
                                <img class="w-50" src=" {{ $comic['thumb'] }} " alt="">
                                <div class="card-body">
                                    <p>
                                        {{ $comic['series'] }}
                                    </p>
                                    <p>
                                        {{ $comic['description'] }}
                                    </p>
    
                                </div>

                            </div>
                           


                        </div>
                        
                   

                </div>

            </div>

        </div>

    </section>

@section('main-content')

@endsection