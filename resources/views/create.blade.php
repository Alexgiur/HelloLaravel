<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Créer un article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/articles">Tous les articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/articles/create">Créer un article</a>
                    </li>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<h1>Créer un article</h1>

<form action="/articles" method="POST">
    @csrf
    <input @error('title') style="border-color: red" @enderror type="text" name="title" placeholder="Titre" value="{{ old('title') }}"><br>
    @error('title')
    <p style="color: red">{{ $message }}</p>
    @enderror
    <br><br>
    <input type="text" name="picture" placeholder="Image" value="{{ old('picture') }}"><br><br>
    <textarea @error('content') style="border-color: red" @enderror name="content">{{ old('content') }}</textarea><br>
    @error('content')
    <p style="color: red">{{ $message }}</p>
    @enderror
    <br><br>
    <button name="btnCreate" type="submit">Créer</button>
</form>

</body>
</html>
