{{-- <header>
    <nav class="nav justify-content-center navbar-light bg-light shadow-lg align-items-center py-3">
        <a class="nav-link active" href="{{route('home')}}" aria-current="page">Home</a> --}}
        {{-- <a class="nav-link" href="{{route('guests.lightsabers')}}">Sabers</a> --}}
        {{-- <a class="nav-link" href="{{route('about')}}">About</a>
        <a class="btn btn-info btn-sm ms-auto rounded-pill" href="{{route('comics.index')}}">Admin</a>
    </nav>
</header>  --}}
<header>
    <nav class="nav justify-content-end navbar-light bg-primary shadow-lg align-items-center ">
        <a class="nav-link active text-black" href="{{route('home')}}" aria-current="page">Home</a>
        <a class="nav-link text-black" href="{{route('about')}}">About</a> 
        <a class="nav-link active text-black" href="{{route('comics')}}" aria-current="page">Dashboard</a>
        <a class="nav-link text-black" href="{{route('comics.index')}}">Comics</a>
        <a class="btn btn-info btn-sm  rounded-pill" href="{{route('comics.index')}}">Admin</a>
    </nav>
   
</header>
<header id="app_header">

    <div class="nav_img">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>
    <div class="nav_tags">
        <div><a href="#">CHARACTERS</a></div>
        <div class="active"><a  href="#">COMICS</a></div>
        <div><a href="#">MOVIES</a></div>
        <div><a href="#">TV</a></div>
        <div><a href="#">GAMES</a></div>
        <div><a href="#">COLLECTIBLES</a></div>
        <div><a href="#">VIDEOS</a></div>
        <div><a href="#">FANS</a></div>
        <div><a href="#">NEWS</a></div>
        <div><a href="#">SHOP</a></div>
    </div>
    <form action="#">
        <div class="search_wrapper d-flex gap-1">
            <input type="search" name="search" id="search" class="border-0 text-end" placeholder="Search">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </span>
        </div>
    </form>

  
</header>

