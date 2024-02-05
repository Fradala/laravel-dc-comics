@extends('layout.app')
    <h2>
        comics
    </h2>

    <section class="series">
        <div class="container">
            <div class="row">
                <div class="row mb-3">
                   
                        <div class="col-7 m-3 p-3">

                            <h2>
                                {{ $comic['title'] }}
                            </h2>

                            <div class="card text-center">
                                <img src=" {{ $comic['thumb'] }} " alt="">

                            </div>
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

    </section>

@section('main-content')

@endsection