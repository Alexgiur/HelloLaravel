<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {

    $greeting = "Yo ";

    $username = "Bob";

    return view('home', [
        'nom_utilisateur' => $username,
        'greeting' => $greeting
    ]);
});


Route::get('/articles', function () {
    $articles = Article::all();

    return view('index', [
        'articles' => $articles
    ]);
});


Route::get('/articles/create', function() {
    return view('create');
});


Route::get('/articles/{id}', function ($id) {
    $article = Article::findOrFail($id);

    return view('show', compact('article')); //cherche dans le code précédent une variable du même nom et fais pareil que les autres return view, attend une chaîne de caractères en paramètre
});


Route::post('/articles', function() {
    $a = new Article;
    $a->title = request('title');
    $a->content = request('content');
    $a->picture = request('picture');
    $a->published_at = date('Y-m-d h:i:s');
    $a->save();
    return redirect('/articles/'.$a->id);
});
