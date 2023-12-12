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
    public function show($userId) {
        
        $user = User::findOrFail($userId);
        // Récupérer les posts de l'utilisateur pour affichage sur le mur
    
        return view('wall', compact('user'));
    }
}
