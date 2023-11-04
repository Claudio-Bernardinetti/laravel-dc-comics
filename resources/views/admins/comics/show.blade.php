@extends('layouts.admins')

@section('content')

<div class="p-5 mb-4 bg-dark text-white rounded-0">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">{{$comic->title}}</h1>
    </div>
</div>

<div class="container d-flex gap-2">

    <img class="img-fluid shadow-lg" src="{{$comic->thumb}}" alt="">
    <img src="{{ asset('storage/' . $comic->thumb) }}" alt="">
    <div class="text p-2">
        <strong class="text-muted">Description</strong>
        <p class="col-md-8 fs-4">{{$comic->description}}</p>
        <div class="display-3">{{$comic->price}}</div>

        <a class="btn btn-success mt-4" href="#" role="button">Buy Now</a>
        <a class="btn btn-danger mt-4" href="#" role="button">Delete</a>
    </div>




</div>

@endsection