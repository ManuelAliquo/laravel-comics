@php
    $comics = config("comics")
@endphp

@extends('layouts.master')

@section('content')
{{-- JUMBO --}}
<div class="jumbo">
    <img class="img-fluid" src="{{ Vite::asset("resources/imgs/jumbotron.jpg")}}" alt="jumbo">
</div>

{{-- COMICS --}}
<div class="comics-section bg-dark pt-5 pb-4 text-white">
    <div class="container position-relative">
        <div class="position-absolute top-0 start-0 bg-primary py-2 px-3 fw-bold fs-5">CURRENT SERIES</div>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="comic-thumb"> 
                        <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="thumbnail">
                    </div>
                    <h5>{{ $comic["series"] }}</h5>   
                </div>
            @endforeach
        </div>
        <div class="text-center"><button class="btn btn-primary rounded-0 fw-bold px-5">LOAD MORE</button></div>
    </div>
</div>

{{-- NAV --}}
<div class="bg-primary comics-nav-section d-flex align-items-center position-relative">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <button class="btn text-white">
                    <img class="img-fluid" src="{{ Vite::asset("resources/imgs/buy-comics-digital-comics.png")}}" alt="">
                    <span>DIGITAL COMICS</span>
                </button>
            </div>
            <div class="col d-flex align-items-center">
                <button class="btn text-white">
                    <img class="img-fluid" src="{{ Vite::asset("resources/imgs/buy-comics-merchandise.png")}}" alt="">
                    <span>DC MERCHANDISE</span>
                </button>
            </div>
            <div class="col d-flex align-items-center">
                <button class="btn text-white">
                    <img class="img-fluid" src="{{ Vite::asset("resources/imgs/buy-comics-subscriptions.png")}}" alt="">
                    <span>SUBSCRIPTION</span>
                </button>
            </div>
            <div class="col d-flex align-items-center">
                <button class="btn text-white">
                    <img class="img-fluid" src="{{ Vite::asset("resources/imgs/buy-comics-shop-locator.png")}}" alt="">
                    <span>COMIC SHOP LOCATOR</span>
                </button>
            </div>
            <div class="col d-flex align-items-center">
                <button class="btn text-white">
                    <img class="img-fluid" src="{{ Vite::asset("resources/imgs/buy-dc-power-visa.svg")}}" alt="">
                    <span>DC POWER VISA</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
