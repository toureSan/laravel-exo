<?php

namespace App\Http\Controllers;
use \App\Models\Movie;
use Illuminate\Http\Request;
use \App\Http\Requests\MovieRequest;
use \App\Models\Artist;
use Intervention\Image\Facades\Image;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $artist = new Artist(['name' => 'Johnson', 'firstname' => 'Dwayne']);
        // $movie = Movie::find(1);
        // $movie->actors()->save($artist);

        return view('movies.index', [ 'movies' => Movie::paginate(3)]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create', ['artists' => Artist::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $movie = Movie::create($request->all());
        $poster = $request->file( 'poster' );

        $filename = 'poster_' . $movie->id . '.' .$poster->guessClientExtension();
        Image::make( $poster )->fit( 180, 240 )
                              ->save( public_path( '/uploads/posters/' . $filename ) );

    return redirect()->route('movie.create')
    ->with('ok', __ ('Movie has been saved'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie], ['artists' => Artist::all()]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, Movie $movie)
    {
        $movie->update( $request->all() );

    return redirect()->route('movie.index')
                     ->with( 'ok',__('Movie has been updated') );
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
        return response()->json();
    }
    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }

}
