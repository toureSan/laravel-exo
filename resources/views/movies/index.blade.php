@extends('layouts.app')
@section('content')

<table class="table table-striped table-centered">
        <thead>
            <tr>
                <th> {{ __('title') }} </th>
                <th> {{ __('year') }} </th>
                <th> {{ __('Actions') }} </th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <td> {{ $movie->title }} </td>
                <td> {{ $movie->year }} </td>
                <td class="table-action">
             <a type="button" href="{{ route('movie.edit', $movie->id )}}" class="btn btn-sm" data-toggle="tooltip"
            title="@lang('Edit movie') {{$movie->title }}"> Edit</a>

            <a type="button" href="{{ route('movie.destroy', $movie->id )}}" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip"
                    title="@lang('Delete movie') {{$movie->title }}"> Delete
                    <i class="fas fa-trash fa-lg" ></i>
            </a>
        </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $movies->appends(request()->except('page'))->links() }}

    <a type="button" href="{{ route('movie.create' )}}" class="btn btn-info"> Create
            <i class="fas fa-trash fa-lg" ></i>
    </a>

    <script>
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });

        $(document).on('click', '.btn-delete', function(){
            let button = $(this);

            $.ajax({
                url: $(this).attr('href'),
                type: 'DELETE'
            }).done(function(){
                $(this).closest('tr').remove();
            })
            return false;
        });

</script>
@endsection
