<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout </title>
</head>
<body>
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
</body>
</html>