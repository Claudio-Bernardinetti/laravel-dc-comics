@extends('layouts.app')

@section('content')

<img class="img-fluid img_jumbo" src="{{$comic->thumb}}" width="10%" alt="">
<img class="img-fluid img_jumbo" src="{{ asset('storage/' . $comic->thumb) }}" width="10%" alt="{{ $comic->thumb }}">

<div class="blue_line">
    
</div>

<div class="container show_comics d-flex">
    <div class="text">
        <div>
            <h1 class="">{{$comic->title}}</h1>
        </div>

        <div class="col-md-10 d-flex justify-content-around align-items-center text-muted bg-success pt-1">
            <p>US Price: {{$comic->price}}</p>
            <p>AVAILABLE</p>
            <p>Check Availability</p>
        </div>

        <div>
            <p class="col-md-10 ">{{$comic->description}}</p>
        </div>
    
    </div>
    <div>
      <strong class="text-muted">ADVERTISEMENT</strong>
      <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
    </div>
    
    </div>
    <div class="info d-flex">
        <div class="col-6">Talent
            {{-- <div>{{ implode(', ', json_decode($comic->artists, true)) }}</div> --}}
            {{-- <div>{{ implode(', ', array_values(json_decode($comic->artists, true))) }}</div> --}}

        </div>
        <div class="col-6">Specs
            <div>{{$comic->series}}</div>
        </div>

    </div>

@endsection