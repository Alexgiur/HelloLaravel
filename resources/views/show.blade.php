@extends('neural-glass')

@section('title', 'Voir un article')

@section('main')
<h1>Un seul article : {{ $article->id }}</h1>
<p>Titre : {{ $article->title }}</p>
<p>Date publication : {{ $article->published_at }}</p>
<p>Contenu : {{ $article->content }}</p>
<p>Image : {{ $article->picture }}</p>
<p>Date création : {{ $article->created_at }}</p>
<p>Date de mise à jour : {{ $article->updated_at }}</p>

<a href="/articles/{{ $article->id }}/edit" class="btn btn-primary">Modifier</a>
<form action="/articles/{{ $article->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Supprimer</button>
</form>
@endsection('main')
