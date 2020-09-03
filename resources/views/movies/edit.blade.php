@extends('layouts.layout')

@section('main_section')
  <h1>Modifica il film {{ $movie->title }}</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('movies.update', $movie->id ) }}" method="post">
    @csrf
    @method('PUT')

    <label>Anno</label><br>
    <input type="number" name="year" value="{{ $movie->year }}"><br>

    <label>Descrizione</label><br>
    <textarea rows="4" cols="50" name="description">{{ $movie->description }}</textarea><br>

    <label>Rating</label><br>
    <input type="number" name="rating" value="{{ $movie->rating }}"><br><br>

    <input type="submit" value="Modifica">
  </form>
@endsection
