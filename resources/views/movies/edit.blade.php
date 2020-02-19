@extends('layouts.app')
@section('content')


<form action="{{route('movie.update', $movie->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <p>
        <label for="title">title</label>
    <input type="text" name="title" id="title" value="{{$movie->title}}" required>
    </p>

    <p>
        <label for="year">Year</label>
    <input type="number" name="year" id="year" value="{{$movie->year}}" required>
    </p>

    <button type="submit">Edit </button>
    
</form>
@endsection