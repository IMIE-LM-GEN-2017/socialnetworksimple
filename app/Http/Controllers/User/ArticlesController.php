<?php

namespace App\Http\Controllers\User;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all()->where('user_id', '=',Auth()->user()->id);

        // ...

        return view('_user.articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('_user.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|string|max:255',
            'content'=>'required|string',
        ]);

        Article::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id'=>Auth()->user()->id
        ]);

        \Session::flash('success', 'Article enregistré');

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('_user.articles.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('_user.articles.edit', ['article'=>$article]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        $article = Article::findOrFail($id);

        if ($article->update($request->all())) {
            \Session::flash('message', 'Article mis à jour');
            return redirect()->route('articles.index');
        } else {
            \Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('user.articles.edit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('articles')->with([
            'flash_message' => 'Deleted',
        ]);
    }
}
