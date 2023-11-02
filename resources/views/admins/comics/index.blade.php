@extends('layouts.admins')

@section('content')


<div id="comics_index">
  <div class="container">
    <div class="row">
      @foreach ($comics as $comic)
        <div class="card-body card_body col-12 col-md-6 col-lg-6 col-xl-3  flex-wrap border border-black m-3 ">
            <div class="card-header card_header">
                <img class="card-img-top" src="{{ $comic->thumb }}"  height="500px" alt="{{ $comic->title }}">
                {{-- <p class="card-text">{{ $comic->description }}</p> --}}
            </div>
            <div class="card-text card_text p-2">
                <h3 class="card-title">{{ $comic->title }}</h3>
                <p class="list-group-item">Price: {{ $comic->price }}</p>
                <p class="list-group-item">Series: {{ $comic->series }}</p>
                <p class="list-group-item">Sale Date: {{ $comic->sale_date }}</p>
                <p class="list-group-item">Type: {{ $comic->type }}</p>
                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">View</a>
                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary">Edit</a>
                {{-- <p class="list-group-item">Artists: {{ implode(', ', json_decode($comic->artists, true)) }}</p>
                <p class="list-group-item">Writers: {{ implode(', ', json_decode($comic->writers, true)) }}</p> --}}
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>   

@endsection