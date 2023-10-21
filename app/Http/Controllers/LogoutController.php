<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function store(Request $request)
    {
        // Añadir seguridad contra ataques CSRF
        auth()->logout();
        return redirect()->route('login')->with("success", "logout");
    }
}
