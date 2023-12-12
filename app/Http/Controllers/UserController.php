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

    public function wall($id) : View
    {
        // Récupérer l'utilisateur à partir de l'ID
        $user = User::find($id);

        if (!$user) {
            // Gérer le cas où l'utilisateur n'existe pas
            abort(404);
        }

        // Passer les données de l'utilisateur à la vue
        return view('wall', ['user' => $user]);
    }
}
    
    
