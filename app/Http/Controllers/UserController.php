<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers(Request $request): View
    {
        $users = User::all();

        return view('Users', [
            'users' => $users,
        ]);
    }

    public function getPostsByUser(Request $request, $id): View
    {
        $user = User::findorFail($id);

        return view('Users', [
            'postsByUser' => $user->posts,
        ]);
    }
}
    
    
