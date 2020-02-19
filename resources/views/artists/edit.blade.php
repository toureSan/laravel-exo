@extends('layouts.app')
@section('content')



<form action="{{route('artist.update', $artist->id)}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <p>
        <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{$artist->name}}" required>
    </p>

    <p>
        <label for="firstname">firstname</label>
    <input type="text" name="firstname" id="firstname" value="{{$artist->firstname}}" required>
    </p>

    <button type="submit">Edit </button>
    
</form>
@endsection