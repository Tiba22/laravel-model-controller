@extends('layouts.main-layout')

@section('content')
  <div class="container">
    <h1>
      Movies
    </h1>
    <ul>
      @foreach ($movies as $movie)
        <li>
          <a href="{{route('movie', $movie -> id)}}">
            {{$movie -> title}}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endsection
