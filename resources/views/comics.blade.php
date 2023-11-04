@extends('layouts.app')

@section('content')

<section class="comics_section">
    <button class="jumbo_btn px-5">CURRENT SERIES</button>
    <div class="container pt-5">
        <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-6 g-3">

            @forelse ($comics as $comic)
            <div class="col ">
                <div class="card rounded-0">
                    <img class="card-img-top rounded-0" src="{{$comic->thumb}}" alt=""> 
                    {{-- <img class="card-img-top" src="{{ asset('storage/' . $comic->thumb) }}" alt=""> --}}
                </div>
                <p class="text-white">{{$comic->series}}</p>    
            </div>
            @empty
            <div class="col">
                <p>No comics in the shop yet!</p>
            </div>
            @endforelse

        </div>
    </div>
    
    <div class="d-flex justify-content-center">
      <a class="btn btn_load text-white rounded-0 " href="{{route('guests.comics.show', $comic->id)}}">LOAD MORE</a>
    </div>
</section>
    <div id="app_blue" class="d-flex  flex-wrap align-items-center justify-content-between">
        <div class="card_digilal">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="">
            <div class="text">DIGITAL COMICS</div>
        </div>
        <div class="card_merchandise">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}"  alt="">
            <div class="text">DC MERCHANDISE</div>
        </div>
        <div class="card_subscription">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="">
            <div class="text">SUBSCRIPTION</div>
        </div>
        <div class="card_locator">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}"  alt="">
            <div class="text">COMIC SHOP LOCATOR</div>
        </div>
        <div class="card_visa">
            <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="">
            <div class="text">DC POWER VISA</div>
        </div> 
        
     </div>


@endsection