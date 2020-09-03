@extends('layouts.layout')

@section('main_section')
  <h1>Lista film</h1>

  <table border="1">
    <tr>
      <th>Titolo</th>
      <th>Visualizzazione</th>
      <th>Modifiche</th>
      <th>Eliminazione</th>
    </tr>
    @foreach ($movies as $movie)
    <tr>
      <td>{{ $movie->title }}</td>
      <td><a href="{{ route('movies.show', $movie->id ) }}">Visualizza info</a></td>
      <td><a href="{{ route('movies.edit', $movie->id ) }}">Modifica</a></td>
      <td>
        <form action="{{ route('movies.destroy', $movie->id ) }}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit"value="Elimina"></a>
        </form>
      </td>
    </tr>
    @endforeach

  </table>
  <br>
  <button type="button"><a href="{{ route('movies.create') }}">Inserisci un nuovo film</a></button>
@endsection
