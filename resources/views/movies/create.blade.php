@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('movie.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <p>
        <label for="title"> Title </label>
        <input type="text" name="title" class="form-control" id="title" value="" required />

        <label for="year"> Year</label>
        <input type="number" id="year" class="form-control" name="year"min="1900" max="2030">  
     <div class="form-group">
            <label for="artist_id">Artist ID</label>
            <select class="form-control" id="artist_id" name="artist_id">
              @foreach($artists as $artist)
        <option value="{{ $artist->id }}">
            {{ $artist->name }} 
            {{ $artist->firstname }} 
        </option>
        @endforeach
            </select>
            
         <input type="file" name="poster">

          </div>
    <button type="submit" class="btn btn-warning"> Create </button>
</p>
</form>

 <!-- Styles -->
 <style>
   
     form{
         height: 600px;
         border-radius: 20px;
         align-items: center;
         margin-left: 30px;
         margin-top: 70px;
         width: 60%;
     }
   
 </style>
 @endsection