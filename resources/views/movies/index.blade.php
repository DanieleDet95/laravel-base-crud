@extends('layouts.layout')

@section('main_section')
  <h1 class="red">Lista film</h1>

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
      <td class="hover"><a href="{{ route('movies.show', $movie->id ) }}">Visualizza info</a></td>
      <td class="hover"><a href="{{ route('movies.edit', $movie->id ) }}">Modifica</a></td>
      <td>
        <form action="{{ route('movies.destroy', $movie->id ) }}" method="post">
          @csrf
          @method('DELETE')
          <input class="w100" type="submit"value="Elimina"></a>
        </form>
      </td>
    </tr>
    @endforeach

  </table>
  <br>
  <button type="button"><a class="black" href="{{ route('movies.create') }}">Nuovo film</a></button>
@endsection
