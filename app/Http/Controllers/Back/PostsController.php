<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller as Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Post;
use App\Page;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('back.posts.index', compact('posts'));
    }

    /**
     * Montre la vue pour créer un article
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $pages = Page::lists('title', 'id');
        return view('back.posts.create', compact('pages'));
    }

    /**
     * Permet de créer un article après soumission du formulaire
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:pages',
            'content' => 'required',
            'page_id' => 'required',
            'published'
        ]);

        if($validator->fails()) {
            return redirect(route('admin.articles.create'))->withErrors($validator);
        }

        else {
            $post = Post::create($request->all());
            $post->save();
            return redirect(route('admin.articles.index'))->with('message', 'Félicitations ! Votre article a bien été créé :)');
        }
    }
}
