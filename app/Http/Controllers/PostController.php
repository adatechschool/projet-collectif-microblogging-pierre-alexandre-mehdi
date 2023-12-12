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

        return view('wall', compact('posts'));
    }   

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'content' => 'required',
            'image' => 'required',
        ]);

        $post = Post::create([
            'content' => $request->input('content'),
            'image' => $request->input('image'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('wall', ['userId' => Auth::user()->id]);
    }

    
}
