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

<form action="{{route('movies.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    <input name="_method" type="hidden" value="POST">
    {{-- oppure usiamo blade --}}
    @method('POST')
    <label for="title">Titolo</label>
    <input type="text" name="titolo" placeholder="Titolo" value="{{ old('titolo') }}">
    <label for="content">Produzione</label>
    <input type="text" name="produzione" placeholder="Produzione" value="{{ old('produzione') }}">
    <label for="content">Descrizione</label>
    <textarea name="descrizione" id="" cols="30" rows="10">{{ old('descrizione') }}</textarea>
    <input type="submit" value="Invia">
</form> 
@endsection
