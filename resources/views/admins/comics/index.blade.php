@extends('layouts.admins')

@section('content')


<div id="comics_index">
  <div class="container">
    <div class="row">
      @forelse ($comics as $comic)
        <div class="card-body card_body col-12 col-md-6 col-lg-6 col-xl-4  flex-wrap border border-black m-3 ">
            <div class="card-header card_header">
                <img class="card-img-top" src="{{ $comic->thumb }}"alt="{{ $comic->title }}">
                {{-- <p class="card-text">{{ $comic->description }}</p> --}}
            </div>
            <div class="card-text card_text p-2">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="list-group-item">Price: {{ $comic->price }}</p>
                <p class="list-group-item">Series: {{ $comic->series }}</p>
                <p class="list-group-item">Sale Date: {{ $comic->sale_date }}</p>
                <p class="list-group-item">Type: {{ $comic->type }}</p>
                <div class="d-flex">
                  <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">View</a>
                  <form action="{{route ('comics.destroy', $comic)}}" method='post'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mx-2">Delete</button>
                  </form>
                </div>
                
                {{-- <p class="list-group-item">Artists: {{ implode(', ', json_decode($comic->artists, true)) }}</p>
                <p class="list-group-item">Writers: {{ implode(', ', json_decode($comic->writers, true)) }}</p> --}}
              </div>
            </div>
            <a href="{{route('comics.create', $comic->id)}}" class="btn btn-secondary">Edit</a>
            @empty
            <div class="col-12">
              <td>Oops! No comics yet!</td>
            </div>
          @endforelse
        </div>
  </div>
</div>   

@endsection