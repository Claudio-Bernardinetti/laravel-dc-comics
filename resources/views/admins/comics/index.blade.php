@extends('layouts.admins')

@section('content')

<div id="comics_index">
  <div class="container">
    <div class="row">
      <a class="btn btn-primary" href="{{route('comics.create')}}">Add Comics</a>

      @if (session('message'))
          <div class="alert alert-success my-2">
              {{ session('message') }}
          </div>
      @endif
      
      @forelse ($comics as $comic)
        <div class="card-body card_body col-12 col-md-6 col-lg-6 col-xl-4  flex-wrap border border-black m-3 ">
            <div class="card-header card_header">
                <img class="card-img-top" src="{{ strstr($comic->thumb, 'http') ? $comic->thumb : asset('storage/' . $comic->thumb) }}" alt="{{ $comic->title }}">
                {{-- <p class="card-text">{{ $comic->description }}</p> --}}
            </div>
            <div class="card-text card_text p-2">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="list-group-item">Price: {{ $comic->price }}</p>
                <p class="list-group-item">Series: {{ $comic->series }}</p>
                <p class="list-group-item">Sale Date: {{ $comic->sale_date }}</p>
                <p class="list-group-item">Type: {{ $comic->type }}</p>
                <div class="d-flex">
                  <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary mx-2">View</a>
                  <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary">Edit</a>
                  <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                  
                    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$comic->id}}">
                      Delete
                    </button>
                  
                    <div class="modal fade" id="exampleModal_{{$comic->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                              Delete item {{$comic->id}}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body bg-danger">
                            You really want to delete <p>{{$comic->title}} ?</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                
                {{-- <p class="list-group-item">Artists: {{ implode(', ', json_decode($comic->artists, true)) }}</p>
                <p class="list-group-item">Writers: {{ implode(', ', json_decode($comic->writers, true)) }}</p> --}}
              </div>
            </div>
            
            @empty
            <div class="col-12">
              <td>Oops! No comics yet!</td>
            </div>
          @endforelse
        </div>
  </div>
</div>   

@endsection