@extends('../layouts.app')

@section('content')
<h1>comics</h1>
@foreach ($comics as $comic)
    <h2>{{ $comic->title }}</h2>
    <p>{{ $comic->description }}</p>
    <!-- Mostra gli altri campi come desideri -->
    @endforeach
    <h1>ciao</h1>
@endsection