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

        return redirect()->route('wall', ['slug' => Auth::user()->slug]);
    }

    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        // Vérifier si l'utilisateur est autorisé à supprimer le post (par exemple, s'il en est l'auteur)
        if ($post->user_id !== Auth::user()->id) {
            // Gérer l'erreur ou rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à supprimer ce post.');
        }

        $post->delete();

        return redirect()->route('wall', ['slug' => Auth::user()->slug])->with('success', 'Post supprimé avec succès.');
    }
}
