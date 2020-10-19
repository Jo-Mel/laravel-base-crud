@extends('layouts.app')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ (!empty($movie)) ? route('movies.update', $movie -> id) : route('movies.store') }}" method="post">
    @csrf
    @if(!empty($movie))
        @method('PATCH')
    @else
        @method('POST')
    @endif
    @if(!empty($movie))
        <input type="hidden" name="id" value="{{ $movie->id }}">
    @endif
    <label for="title">Titolo</label>
    <input type="text" name="titolo" placeholder="Titolo" value="{{ (!empty($movie)) ? $movie->titolo : old('titolo') }}">
    <label for="content">Produzione</label>
    <input type="text" name="produzione" placeholder="Produzione" value="{{ (!empty($movie)) ? $movie->produzione : old('produzione') }}">
    <label for="content">Descrizione</label>
    <textarea name="descrizione" id="" cols="30" rows="10">{{ (!empty($movie)) ? $movie->descrizione : old('descrizione') }}</textarea>
    <input type="submit" value="Invia">
</form> 
@endsection
