<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Hacer uso del usuario y mostrarlo en el muro o perfil
    public function index(User $user)
    {
        return view('dashboard', ['user' => $user]);
    }
    public function create()
    {
        return view('posts.create');
    }
}
