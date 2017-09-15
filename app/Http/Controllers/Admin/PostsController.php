<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Post::all();

        // ...

        return view('posts.index', ['posts' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($catId = null)
    {
        $cats = PostCategory::all()->pluck('name', 'id');

        return view('posts.create', ['categories' => $cats, 'catId' => $catId]);
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
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'post_category_id' => 'required|exists:post_categories,id'
        ]);

        $data=$request->all();
        $data['user_id'] = Auth()->user()->id;

        Post::create($data);

        Session::flash('success', 'Post enregistré');

        return redirect()->route('postsCat.show', ['id'=>$request->get('post_category_id')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $post = Post::findOrFail($id);

            return view('posts.edit', ['post' => $post]);
        }
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
        $post = Post::findOrFail($id);

        if ($post->update($request->all())) {
            Session::flash('message', 'Post mis à jour');
            return redirect()->route('posts.index');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('posts.edit', ['id' => $id]);
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
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('posts')->with([
            'flash_message' => 'Deleted',
        ]);
    }
}
