@extends('layouts.app')

@section('content')
    <main role="main">


        @include('layouts.partials.header')

        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/akt3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/akt2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/akt1.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <hr>
            <br>
            <!-- Example row of columns -->
            <div class="row">

                <div class="col-md-4">
                    <h2>ПОЛЕЗНИ</h2>
                    <ul class="list-group">
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                        <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                        <li class="list-group-item list-group-item-success">A simple success list group item</li>
                        <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                        <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                        <li class="list-group-item list-group-item-info">A simple info list group item</li>
                        <li class="list-group-item list-group-item-light">A simple light list group item</li>
                        <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>СТАНИ ЧЛЕН</h2>
                    <button type="button" class="btn btn-primary">ЧЛЕНСТВО И ДОНОРСТВО</button>
                    <br>
                    <hr>
                    <button type="button" class="btn btn-secondary">ВЪПРОСИ И ДИСКУСИИ</button>
                    <br>
                    <hr>
                    <button type="button" class="btn btn-success">SucПРЕДСТАВЯНЕ И ЦЕЛ НА ГРАЖДАНСКА ВЛАСТ</button>
                    <br>
                    <hr>
                    <button type="button" class="btn btn-danger">МИРОГЛЕД И ИДЕОЛОГИЯ НА ХУМАНИЗМЪТ</button>
                </div>
                <div class="col-md-4">
                    <h2>ВРЪЗКИ</h2>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                    </div>
                </div>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>

@endsection
