@extends('layouts.app')
@section('content')


<table class="table table-striped table-centered">
        <thead>
            <tr>
                <th> {{ __('Name') }} </th>
                <th> {{ __('Firstname') }} </th>
                <th> {{ __('Actions') }} </th>

            </tr>
        </thead>
        <tbody>
            @foreach($artists as $artist)
            <tr>
                <td> {{ $artist->name }} </td>
                <td> {{ $artist->firstname }} </td>
                <td class="table-action">  <a type="button" href="{{ route('artist.edit', $artist->id )}}" class="btn btn-sm" data-toggle="tooltip"
            title="@lang('Edit artist') {{$artist->name }}"> Edit</a>

            <a type="button" href="{{ route('artist.destroy', $artist->id )}}" class="btn btn-danger btn-sm btn-delete" data-toggle="tooltip"
                    title="@lang('Delete artist') {{$artist->name }}"> Delete
                    <i class="fas fa-trash fa-lg" ></i>
            </a>


        </td>

            </tr>

            @endforeach
        </tbody>
    </table>

 {{ $artists->appends(request()->except('page'))->links() }}
 <a type="button" href="{{ route('artist.create' )}}" class="btn btn-info"> Create
        <i class="fas fa-trash fa-lg"></i>
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
