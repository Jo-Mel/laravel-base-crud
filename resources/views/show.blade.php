@extends('layouts.app')
@section('content')
<h2>{{ $movie->titolo }}</h2>

<strong>{{ $movie->produzione }}</strong>
<p>{{ $movie->descrizione }}</p>


@endsection