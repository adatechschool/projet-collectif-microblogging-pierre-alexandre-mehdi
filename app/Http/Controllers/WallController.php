<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class WallController extends Controller
{
    public function show($slug) {

        $user = User::where('slug', $slug)->firstOrFail();

        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            // Utilisateur non authentifié, redirige-le vers la page de connexion
            return redirect()->route('login');
        }
                // Récupérer les posts de l'utilisateur pour affichage sur le mur
    
        return view('wall', compact('user'));
    }
}
