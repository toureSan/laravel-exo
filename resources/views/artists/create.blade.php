@extends('layouts.app')
@section('content')

<form action="{{route('artist.store')}}" method="post" enctype="multipart/form-data>
    {{csrf_field()}}

    <p>
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="" required>
    </p>

    <p>
        <label for="firstname">firstname</label>
        <input type="text" class="form-control" name="firstname" id="firstname" value="" required>
    </p>

    <button type="submit" class="btn btn-warning"> Create </button>

</form>
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
