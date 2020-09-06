@extends('layouts.layout')

@section('main_section')
  <h1 class="red">Film appena inserito</h1>

  <table border="1">
    <tr>
      <th>Titolo</th>
      <th>Anno</th>
      <th>Rating</th>
    </tr>
    <tr>
      <td class="p10">{{ $movie->title }}</td>
      <td class="p10">{{ $movie->year }}</td>
      <td class="p10">{{ $movie->rating }}</td>
    </tr>
    <tr>
      <th colspan="3">Descrizione</th>
    </tr>
    <tr>
      <td class="p10" colspan="3">{{ $movie->description }}</td>
    </tr>
  </table>
  <br>
  <button type="button"><a href="{{ route('movies.index') }}">Home</a></button>
@endsection
