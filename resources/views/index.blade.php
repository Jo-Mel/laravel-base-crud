@extends('layouts.app')


@section('content')
@foreach ($movies as $movie)
    <ul>
        <li>
            <a href="{{ route('movies.show',$movie->id) }}">
                {{ $movie->titolo }}
            </a>
        </li>
        
        {{-- <li>{{ $movie->produzione }}</li>
        <li>{{ $movie->descrizione }}</li> --}}
    
    </ul>
    
@endforeach
    
@endsection