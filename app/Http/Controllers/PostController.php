<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;
use Illuminate\http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getPost(Request $request, $id): View
    {
        $post = Post::findOrFail($id);

        return view('detailPost', [
            'post' => $post,
        ]);
    }
    
    public function getPosts(Request $request): View
    {
        $posts = Post::all();

        return view('news', compact('posts'));
    }   

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'content' => 'required',
            'image' => 'required',
        ]);

        // dd(Auth::user()->id);
        // dd([
        //     'content' => $request->input('content'),
        //     'image' => $request->input('image'),
        //     'user_id' => Auth::user()->id,
        // ]);

        $post = Post::create([
            'content' => $request->input('content'),
            'image' => $request->input('image'),
            'user_id' => Auth::user()->id,
        ]);
        // dd($post);

        return redirect()->route('wall', ['userId' => Auth::user()->id]);
    }
}

    //     Validation et traitement du formulaire...

    // $postData = [
    //     'content' => $request->input('content'),
    //     'image' => $request->input('image'),
    // ];

    // // Créer le post
    // $post = Post::create($postData);

    // // Lier le post à l'utilisateur actuellement authentifié
    // if (Auth::check()) {
    //     Auth::user()->posts()->save($post);
    // }

    // Redirection ou autres actions après la création du post
//     return redirect('/posts')->with('success', 'Post created successfully');
// }
