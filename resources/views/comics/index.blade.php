@extends('../layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h2 class="card-title">{{ $comic->title }}</h2>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: {{ $comic->price }}</li>
                        <li class="list-group-item">Series: {{ $comic->series }}</li>
                        <li class="list-group-item">Sale Date: {{ $comic->sale_date }}</li>
                        <li class="list-group-item">Type: {{ $comic->type }}</li>
                        <li class="list-group-item">Artists: {{ implode(', ', json_decode($comic->artists, true)) }}</li>
                        <li class="list-group-item">Writers: {{ implode(', ', json_decode($comic->writers, true)) }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
@endsection
