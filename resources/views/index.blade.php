<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Tous les articles</title>
</head>
<body>
    <h1>Tous les articles !</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Publication date</th>
        </tr>

    @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->published_at }}</td>
        {{ $article->$article }}
        </tr>
    @endforeach

    </table>
</body>
</html>
