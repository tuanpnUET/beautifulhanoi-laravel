<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //action getAll
    public function index() {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    //action create
    public function create() {
        return view('article.create');
    }
    
    //action store
    public function store(Request $request) {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
 
        return view('article.store');
    }

    //action edit
    public function edit(Request $request, $id) {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }
 
    //action update
    public function update(Request $request) {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
 
        return view('article.update');
    }

    //action show
    public function show(Request $request, $id) {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }

    //action delete
    public function delete(Request $request) {
        Article::destroy($request->id);
        return view('article.delete');
    }
}
