@extends('layouts.app')

@section('content')

<section class="sabers py-5">
    <div class="container">
        <div class="row row-cols-md-3 g-3">

            @forelse ($comics as $comic)
            <div class="col">
                <div class="card">
                    <!-- <img class="card-img-top" src="{{$saber->cover_image}}" alt=""> -->
                    <img class="card-img-top" src="{{ asset('storage/' . $comic->thumb) }}" alt="">

                    <div class="card-body">
                        <h3>{{$comics->name}}</h3>
                        <a href="{{route('admins.comics.show', $comic->id)}}">View</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>No comics in the shop yet!</p>
            </div>

            @endforelse
        </div>
    </div>
</section>

@endsection