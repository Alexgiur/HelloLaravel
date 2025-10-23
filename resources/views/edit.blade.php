@extends('layout')

@section('title', 'Mettre à jour article')

@section('main')
<h1>Mettre à jour l'article {{ $article->id }}</h1>

<form action="/articles/{{ $article->id }}" method="POST">
    @csrf
    @method('PATCH')
    <input @error('title') style="border-color: red" @enderror type="text" name="title" placeholder="Titre"
           value="{{ old('title') ?? $article->title }}"><br>
    @error('title')
    <p style="color: red">{{ $message }}</p>
    @enderror
    <br><br>
    <input type="text" name="picture" placeholder="Image" value="{{ old('picture') ?? $article->picture }}"><br><br>
    <textarea @error('content') style="border-color: red" @enderror name="content">{{ old('content') ?? $article->content }}</textarea><br>
    @error('content')
    <p style="color: red">{{ $message }}</p>
    @enderror
    <br><br>
    <button name="btnCreate" type="submit">Mettre à jour</button>
</form>
@endsection('main')
