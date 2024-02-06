@extends('layout.app')
    

    <section class="series">
       

@section('main-content')
        <section class="form-container container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <h2 class="p-4">
                        Crea un nuovo fumetto
                    </h2>
                    <form action="{{ route('guest.comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo fumetto:</label>
                            <input type="text" name="title" id="title" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione fumetto:</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label for="thumb" class="form-label">Immagine Url</label>
                            <input type="text" name="thumb" id="thumb" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Prezzo fumetto:</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label for="series" class="form-label">Nome fumetto:</label>
                            <input type="text" name="series" id="series" class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label for="sale_date" class="form-label">Data:</label>
                            <input type="text" name="sale_date" id="sale_date" class="form-control">
                        </div>

                        <div class="mb-3 ">
                            <label for="type" class="form-label">Tipo:</label>
                            <input type="text" name="type" id="type" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Inserisci nuovo fumetto</button>
                    </form>
                </div>

            </div>
        </section>
        
       >

@endsection