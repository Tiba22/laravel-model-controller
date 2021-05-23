@extends('layouts.main-layout')

@section('content')
  <div class="container">
    <h1>
      Movie
    </h1>
    <h2>
      Titolo:  {{ $movie -> title }}
    </h2>
    <h2>
      Titolo originale: {{ $movie -> original_title }}
    </h2>
    <h3>
      Nazionalità: {{$movie -> nationality}}
    </h3>
    <h3>
      Data di uscita: {{$movie -> date}}
    </h3>

    <a class="back" href="{{route('home')}}">
      BACK TO HOME
    </a>
  </div>
@endsection
