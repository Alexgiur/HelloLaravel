<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Un seul article : {{ $article->id }}</title>
</head>
<body>
    <div style="text-align: center">
        <h1>Voici l'article {{ $article->id }} !</h1>

            <p>Id : {{ $article->id }}</p>
            <p>Titre : {{ $article->title }}</p>
            <p>Date de publication : {{ $article->published_at }}</p>
            <p>Contenu : {{ $article->content }}</p>
            <p>Image : {{ $article->picture }}</p>
            <p>Date de création : {{ $article->created_at }}</p>
            <p>Date de mise à jour : {{ $article->updated_at }}</p>
    </div>
</body>
</html>
