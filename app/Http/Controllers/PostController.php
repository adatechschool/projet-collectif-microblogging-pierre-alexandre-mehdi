<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Post;

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
    
}
