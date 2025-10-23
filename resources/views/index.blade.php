@extends('layout')

@section('title', 'Tous les articles')

@section('main')
<h1>Tous les articles</h1>
<table class="table  table-striped">
    <tr>
        <th>Id <div class="spinner-border text-secondary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div></th>
        <th>Title</th>
        <th>Publication date</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td><a href="/articles/{{ $article->id }}"> {{ $article->title }}</a></td>
            <td>{{ $article->published_at }}</td>
            <td><a href="/articles/{{ $article->id }}/edit" class="btn btn-primary">Modifier</a></td>
            <td><form action="/articles/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Supprimer</button>
                </form></td>
        </tr>
    @endforeach
</table>
@endsection
