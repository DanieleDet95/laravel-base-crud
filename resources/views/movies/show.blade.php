@extends('layouts.layout')

@section('main_section')
  <h1>Film appena inserito</h1>

  <table border="1">
    <tr>
      <th>Titolo</th>
      <th>Anno</th>
      <th>Rating</th>
    </tr>
    <tr>
      <td>{{ $movie->title }}</td>
      <td>{{ $movie->year }}</td>
      <td>{{ $movie->rating }}</td>
    </tr>
    <tr>
      <th colspan="3">Descrizione</th>
    </tr>
    <tr>
      <td colspan="3">{{ $movie->description }}</td>
    </tr>
  </table>
  <br>
  <button type="button"><a href="{{ route('movies.index') }}">Home</a></button>
@endsection
