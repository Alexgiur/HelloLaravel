<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Créer un article</title>
</head>
<body>
<div style="text-align: center">
    <h1>Créer un article</h1>
    <form action="/articles" method="POST">
        @csrf
        <label for="title">Titre :</label><br><br>
        <input type="text" id="title" name="title" placeholder="Titre..."><br><br>
        <label for="content">Contenu :</label><br><br>
        <textarea id="content" name="content" placeholder="Contenu..."></textarea><br><br>
        <label for="picture">Image :</label><br><br>
        <input type="text" id="picture" name="picture"><br><br>
        <input type="submit" id="envoyer" name="envoyer">
    </form>
</div>
</body>
</html>
