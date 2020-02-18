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
            title="@lang('Edit artist') {{$artist->name }}"> Edit</a></td>
    
            </tr>
           
            @endforeach
        </tbody>
    </table>
    
    {{ $artists->appends(request()->except('page'))->links() }}