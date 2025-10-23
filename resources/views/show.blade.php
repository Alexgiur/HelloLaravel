<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Un seul article : {{ $article->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
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
</body>
</html>
