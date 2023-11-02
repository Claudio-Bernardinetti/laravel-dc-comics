

<div id="comics_index">
  <div class="container">
    <div class="row">
      @foreach ($comics as $comic)
        <div class="card-body card_body col-xl-4 flex-wrap border border-black g-3">
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
                {{-- <p class="list-group-item">Artists: {{ implode(', ', json_decode($comic->artists, true)) }}</p>
                <p class="list-group-item">Writers: {{ implode(', ', json_decode($comic->writers, true)) }}</p> --}}
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>   

