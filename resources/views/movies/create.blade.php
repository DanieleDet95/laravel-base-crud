@extends('layouts.layout')

@section('main_section')
  <h1 class="red">Inserisci nuovo film</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('movies.store') }}" method="post">
    @csrf
    @method('POST')

    <label>Titolo</label><br>
    <input type="text" name="title" value="{{ old('title') }}"><br>

    <label>Anno</label><br>
    <input type="number" name="year" value="{{ old('year') }}"><br>

    <label>Descrizione</label><br>
    <textarea rows="4" cols="50" name="description">{{ old('description') }}</textarea><br>

    <label>Rating</label><br>
    <input type="number" name="rating" value="{{ old('rating') }}"><br><br>

    <input type="submit" value="Inserisci">
  </form>
@endsection
