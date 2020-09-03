<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $movies = Movie::all();

      return view('movies/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('movies/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|max:255',
        'year' => 'required|integer|min:1895|max:2020',
        'description' => 'required|',
        'rating' => 'required|integer|min:1|max:10',
      ]);

      $form_movie = $request->all();

      $new_movie = new Movie;
      // $new_movie->title = $form_movie['title'];
      // $new_movie->year = $form_movie['year'];
      // $new_movie->description = $form_movie['description'];
      // $new_movie->rating = $form_movie['rating'];
      $new_movie->fill($form_movie);

      $saved = $new_movie->save();

      if ($saved) {
        $saved_movies = Movie::orderBy('id', 'desc')->first();
        return redirect()->route('movies.show', $saved_movies);
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
      return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
      $request->validate([
        'year' => 'required|integer|min:1895|max:2020',
        'description' => 'required|',
        'rating' => 'required|integer|min:1|max:10',
      ]);

      $data = $request->all();
      $movie->update($data);

      return redirect()->route('movies.index', $movie);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
      $movie->delete();

      return redirect()->route('movies.index');
    }
}
