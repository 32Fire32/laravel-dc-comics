@extends('layout.main')
@section('page-content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <p>{{ $comic->description }}</p>
        <a href="{{ route('comics.index') }}"class="btn btn-primary">Torna alla lista</a>
    @endsection
