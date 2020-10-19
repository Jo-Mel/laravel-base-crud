@extends('layouts.app')


@section('content')
@foreach ($movies as $movie)
    <ul>
        <li>
            <a href="{{ route('movies.show',$movie->id) }}">
                {{ $movie->titolo }}
            </a>
        </li>
        <li>
            <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Canc">

            </form>
        </li>
        
        {{-- <li>{{ $movie->produzione }}</li>
        <li>{{ $movie->descrizione }}</li> --}}
    
    </ul>
    
@endforeach
    
@endsection